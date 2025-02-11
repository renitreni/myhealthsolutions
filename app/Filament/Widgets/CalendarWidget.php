<?php

namespace App\Filament\Widgets;

use App\Mail\AppointmentBookedMailer;
use App\Mail\AppointmentUpdateBookedMailer;
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
use Illuminate\Support\Facades\Mail;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    public Model|string|null $model = Appointment::class;

    protected function modalActions(): array
    {
        $patientList = Patient::with('user:id,name')->get()->pluck('user.name', 'id')->toArray();
        $specialistList = Specialist::with('user:id,name')->get()->pluck('user.name', 'id')->toArray();
        $appointments = [
            'general_consultation' => 'general_consultation',
            'follow_up' => 'follow_up',
            'specialist_consultation' => 'specialist_consultation',
            'routine_checkup' => 'routine_checkup',
            'vaccination' => 'vaccination',
            'diagnostic' => 'diagnostic',
            'surgical_consultation' => 'surgical_consultation',
            'physical_therapy' => 'physical_therapy',
            'mental_health' => 'mental_health',
            'emergency' => 'emergency',
            'urgent' => 'urgent',
            'same_day' => 'same_day',
            'prenatal_postnatal' => 'prenatal_postnatal',
            'dental' => 'dental',
            'onsite' => 'onsite',
            'online' => 'online',
            'home_visit' => 'home_visit'
        ];
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
                            Select::make('appointment_status')->options(['pending' => 'pending', 'in-progress' => 'in-progress', 'done' => 'done'])->required(),
                            Select::make('appointment_type')->options($appointments)->required(),
                            DateTimePicker::make('appointment_date')->required(),
                            Textarea::make('notes')->required()->columnSpanFull(),
                        ]),
                ])
                ->mountUsing(function (Form $form, array $arguments) {
                    $form->fill([
                        'appointment_date' => $arguments['start'] ?? now(),
                    ]);
                })
                ->action(function (array $data) {
                    Appointment::create([
                        'specialist_id' => $data['specialist_id'] ?? Auth::user()->specialist->id,
                        'patient_id' => $data['patient_id'],
                        'appointment_date' => $data['appointment_date'],
                        'appointment_type' => $data['appointment_type'],
                        'appointment_status' => $data['appointment_status'],
                        'notes' => $data['notes'],
                    ]);

                    $specialist = Specialist::with('user')->find($data['specialist_id']);
                    $patient = Patient::with('user')->find($data['patient_id']);

                    Mail::to([$patient->user->email, $specialist->user->email])
                        ->bcc(['renier.trenuela@gmail.com', 'info@smartinboxtech.xyz'])
                        ->send(new AppointmentBookedMailer($data, $specialist, $patient));

                    redirect()->route('filament.portal.pages.calendar');
                }),
            EditAction::make()
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
                            Select::make('appointment_status')->options(['pending' => 'pending', 'in-progress' => 'in-progress', 'done' => 'done'])->required(),
                            Select::make('appointment_type')->options($appointments)->required(),
                            DateTimePicker::make('appointment_date')->required(),
                            Textarea::make('notes')->required()->columnSpanFull(),
                        ]),
                ])
                ->mountUsing(function ($record, Form $form, array $arguments) {
                    $form->fill([
                        'appointment_date' => $record->appointment_date,
                        'specialist_id' => $record->specialist_id,
                        'patient_id' => $record->patient_id,
                        'appointment_date' => $record->appointment_date,
                        'appointment_type' => $record->appointment_type,
                        'appointment_status' => $record->appointment_status,
                        'notes' => $record->notes,
                    ]);
                })
                ->action(function (array $data, $record) {
                    Appointment::updateOrCreate(['id' => $record->id], [
                        'specialist_id' => $data['specialist_id'] ?? Auth::user()->specialist->id,
                        'patient_id' => $data['patient_id'],
                        'appointment_date' => $data['appointment_date'],
                        'appointment_type' => $data['appointment_type'],
                        'appointment_status' => $data['appointment_status'],
                        'notes' => $data['notes'],
                    ]);

                    $specialist = Specialist::with('user')->find($data['specialist_id']);
                    $patient = Patient::with('user')->find($data['patient_id']);

                    Mail::to([$patient->user->email, $specialist->user->email])
                        ->bcc(['renier.trenuela@gmail.com', 'info@smartinboxtech.xyz'])
                        ->send(new AppointmentUpdateBookedMailer($data, $specialist, $patient));

                    redirect()->route('filament.portal.pages.calendar');
                }),
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
                    'title' => $appointment->appointment_status . ' ' . $appointment->patient->user->name,
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
