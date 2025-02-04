<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id',
        'specialist_id',
        'appointment_date',
        'appointment_type',
        'appointment_status',
        'notes',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}
