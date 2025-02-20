<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpecialistResource\Pages;
use App\Models\Specialist;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SpecialistResource extends Resource
{
    protected static ?string $model = Specialist::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(['md' => 6, 'sm' => 6])
                    ->relationship('user')
                    ->schema([
                        TextInput::make('name')->columnSpan(['md' => 2, 'sm' => 6]),
                        TextInput::make('email')->columnSpan(['md' => 2, 'sm' => 6]),
                        TextInput::make('role')->default('specialist')->readOnly()->columnSpan(['md' => 2, 'sm' => 6]),
                        TextInput::make('password')->password()->required()->hiddenOn('edit')->columnSpan(['md' => 3, 'sm' => 6]),
                        TextInput::make('password_confirmation')->password()->required()->same('password')->hiddenOn('edit')->columnSpan(['md' => 3, 'sm' => 6]),
                    ])->columnSpanFull(),
                Grid::make(['md' => 6, 'sm' => 6])
                    ->schema([
                        TextInput::make('speciality')->required()->columnSpan(['md' => 2, 'sm' => 6]),
                        TextInput::make('license_number')->required()->columnSpan(['md' => 2, 'sm' => 6]),
                        TextInput::make('experience_years')->required()->columnSpan(['md' => 2, 'sm' => 6]),
                        TextInput::make('clinic_address')->required()->columnSpan(['md' => 6, 'sm' => 6]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable(),
                TextColumn::make('speciality')->sortable()->searchable(),
                TextColumn::make('license_number')->sortable()->searchable(),
                TextColumn::make('experience_years'),
                TextColumn::make('clinic_address'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSpecialists::route('/'),
            'create' => Pages\CreateSpecialist::route('/create'),
            'edit' => Pages\EditSpecialist::route('/{record}/edit'),
        ];
    }
}
