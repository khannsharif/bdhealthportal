<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospital extends Model
{
    use HasFactory;
    protected $table = "hospitals"; 
    protected $guarded = [];

    public function departments()
    {
        return $this->belongsToMany(Department::class,'hospital_departments');
    }

    public function doctors(){
        return $this->hasMany(Doctor::class,'department_id');
    }
}
