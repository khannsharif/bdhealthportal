<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    protected $table = "departments";
    protected $guarded = [];

    public function hospitals(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Hospital::class,'hospital_departments');
    }

    public function doctors(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Doctor::class,'department_id');
    }

}
