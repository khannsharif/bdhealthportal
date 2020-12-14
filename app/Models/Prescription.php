<?php

namespace App\Models;

use Barryvdh\DomPDF\PDF;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
