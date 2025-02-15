<?php

namespace App\Filament\Resources\SpecialistResource\Pages;

use App\Filament\Resources\SpecialistResource;
use App\Models\Specialist;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;

class EditSpecialist extends EditRecord
{
    protected static string $resource = SpecialistResource::class;

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
                ->action(function (array $data, Specialist $patient) {
                    $user = $patient->user;
                    $user->password = $data['password'];
                    $user->save();
                }),
            Actions\DeleteAction::make(),
        ];
    }
}
