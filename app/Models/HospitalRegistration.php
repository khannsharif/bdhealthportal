<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalRegistration extends Model
{
    use HasFactory;
    protected $table = "hospital_registrations"; 
    protected $guarded = [];
   
}
