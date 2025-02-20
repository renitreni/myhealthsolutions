<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Models\Patient;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(['md' => 6, 'sm' => 6])
                    ->relationship('user')
                    ->schema([
                        TextInput::make('name')->columnSpan(['md' => 2, 'sm' => 6]),
                        TextInput::make('email')->columnSpan(['md' => 2, 'sm' => 6]),
                        TextInput::make('role')->default('patient')->readOnly()->columnSpan(['md' => 2, 'sm' => 6]),
                        TextInput::make('password')->password()->required()->hiddenOn('edit')->columnSpan(['md' => 3, 'sm' => 6]),
                        TextInput::make('password_confirmation')->password()->required()->same('password')->hiddenOn('edit')->columnSpan(['md' => 3, 'sm' => 6]),
                    ])->columnSpanFull(),
                DatePicker::make('date_of_birth'),
                Select::make('gender')->options(['male', 'female']),
                Textarea::make('address')->columnSpanFull()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable(),
                TextColumn::make('date_of_birth')->sortable()->searchable(),
                TextColumn::make('gender'),
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
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
