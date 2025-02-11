<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Filament\Resources\PatientResource;
use App\Models\Patient;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;

class EditPatient extends EditRecord
{
    protected static string $resource = PatientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Change Password')
                ->color('warning')
                ->icon('heroicon-o-lock-closed')
                ->form([
                    Grid::make(12)
                        ->schema([
                            TextInput::make('password')->password()->required()->columnSpan(6),
                            TextInput::make('password_confirmation')->password()->required()->same('password')->columnSpan(6),
                        ]),
                ])
                ->action(function (array $data, Patient $patient) {
                    $user = $patient->user;
                    $user->password = $data['password'];
                    $user->save();
                }),
            Actions\DeleteAction::make(),
        ];
    }
}
