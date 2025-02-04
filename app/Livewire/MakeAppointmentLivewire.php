<?php

namespace App\Livewire;

use App\Models\Inquiry;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class MakeAppointmentLivewire extends Component
{
    public $appointments = [
        'general_consultation' => 'General Consultation – For non-emergency health concerns, check-ups, or advice.',
        'follow_up' => 'Follow-Up Appointment – A visit after an initial consultation to monitor progress.',
        'specialist_consultation' => 'Specialist Consultation – A referral-based visit to a specialist (e.g., cardiologist, neurologist).',
        'routine_checkup' => 'Routine Check-Up – Preventive visits, such as annual physical exams.',
        'vaccination' => 'Vaccination Appointment – Scheduled for immunizations.',
        'diagnostic' => 'Diagnostic Appointment – For tests like blood work, X-rays, MRI, CT scans, etc.',
        'surgical_consultation' => 'Surgical Consultation – Discussing a planned surgical procedure.',
        'physical_therapy' => 'Physical Therapy Appointment – For rehabilitation and recovery exercises.',
        'mental_health' => 'Mental Health Consultation – Therapy sessions with a psychologist or psychiatrist.',
        'emergency' => 'Emergency Appointment – Immediate medical attention required, often handled in ERs.',
        'urgent' => 'Urgent Appointment – Needs quick attention but not life-threatening.',
        'same_day' => 'Same-Day Appointment – A slot available for patients requiring quick but non-emergency care.',
        'prenatal_postnatal' => 'Prenatal/Postnatal Appointment – Pregnancy-related consultations.',
        'dental' => 'Dental Appointment – For oral health check-ups and treatments.',
        'onsite' => 'Onsite (In-Person) Appointment – The patient visits the clinic or hospital.',
        'online' => 'Online (Telemedicine) Appointment – Consultation happens via video call, phone, or chat.',
        'home_visit' => 'Home Visit Appointment – The doctor visits the patient’s home.',
    ];

    public $email;

    public $name;

    public $service;

    public $time;

    public $note;

    public $inquiryCount;

    public function render()
    {
        $this->inquiryCount = Inquiry::where('ip', Request::ip())->count();
    
        return view('livewire.make-appointment-livewire');
    }

    public function makeAppointment()
    {
        $inquiry = [
            'email' => $this->email,
            'name' => $this->name,
            'service' => $this->service,
            'time' => $this->time,
            'note' => $this->note,
            'ip' => Request::ip()
        ];

        Inquiry::create($inquiry);
    }
}
