<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Specialist;
use Carbon\Carbon;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    public Model|string|null $model = Appointment::class;

    protected function modalActions(): array
    {
        $patientList = Patient::with('user:id,name')->get()->pluck('user.name', 'id')->toArray();
        $specialistList = Specialist::with('user:id,name')->get()->pluck('user.name', 'id')->toArray();
 
        return [
            CreateAction::make()
                ->form([
                    Grid::make()
                        ->schema([
                            Select::make('patient_id')->label('Patient')
                                ->options($patientList)
                                ->searchable()
                                ->required(),
                            Select::make('specialist_id')->label('Specialist')
                                ->options($specialistList)
                                ->searchable()
                                ->required(),
                            Select::make('appointment_type')->options(['consultation', 'follow-up'])->required(),
                            DateTimePicker::make('appointment_date')->required(),
                            Textarea::make('notes')->required()->columnSpanFull(),
                        ]),
                ])
                ->mountUsing(function(Form $form, array $arguments){
                    $form->fill([
                        'appointment_date' => $arguments['start']
                    ]);
                })
                ->action(function (array $data) {
                    Appointment::create([
                        'specialist_id' => $data['specialist_id'] ?? Auth::user()->specialist->id,
                        'patient_id' => $data['patient_id'],
                        'appointment_date' => $data['appointment_date'],
                        'appointment_type' => $data['appointment_type'],
                        'appointment_status' => 'pending',
                        'notes' => $data['notes'],
                    ]);

                    redirect()->route('filament.portal.pages.calendar');
                }),
            EditAction::make(),
            DeleteAction::make(),
        ];
    }

    public function getFormSchema(): array
    {
        return [];
    }

    public function fetchEvents(array $fetchInfo): array
    {
        return Appointment::with(['patient'])
            ->where('appointment_date', '>', Carbon::parse($fetchInfo['start']))
            ->where('appointment_date', '<', Carbon::parse($fetchInfo['end']))
            ->get()
            ->map(function (Appointment $appointment) {
                return [
                    'id' => $appointment->id,
                    'title' => $appointment->patient->user->name,
                    'start' => $appointment->appointment_date,
                    'end' => $appointment->appointment_date,
                ];
            })
            ->toArray();
    }

    public static function canView(): bool
    {
        return false;
    }
}
