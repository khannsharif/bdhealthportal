<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function users()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }

}
