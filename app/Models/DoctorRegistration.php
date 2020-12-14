<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorRegistration extends Model
{
    use HasFactory;
    protected $table = "doctor_registrations"; 
    protected $guarded = [];
}
