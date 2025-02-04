<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'speciality',
        'license_number',
        'experience_years',
        'clinic_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
