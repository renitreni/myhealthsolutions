<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)
                    ->schema([
                        TextInput::make('name')->columnSpan(6)->required(),
                        TextInput::make('email')->columnSpan(6)->required(),
                        TextInput::make('password')->password()->columnSpan(6)->required()->hiddenOn('edit'),
                        TextInput::make('password_confirmation')->password()->required()->same('password')->columnSpan(6)->hiddenOn('edit'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->copyable(),
                TextColumn::make('email')->copyable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Change Password')
                    ->color('danger')
                    ->icon('heroicon-o-lock-closed')
                    ->form([
                        Grid::make(12)
                            ->schema([
                                TextInput::make('password')->password()->required()->columnSpan(6),
                                TextInput::make('password_confirmation')->password()->required()->same('password')->columnSpan(6),
                            ]),
                    ])
                    ->action(function (array $data, User $user) {
                        $user->password = $data['password'];
                        $user->save();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
