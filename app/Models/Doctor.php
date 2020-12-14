<?php

namespace App\Models;

use App\Models\Hospital;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $table = "doctors";
    protected $guarded = [];

    public function hospital(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Hospital::class);
    }

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function scopeSearch($query){
        return $query->join('hospitals', 'doctors.hospital_id', 'hospitals.id')
            ->join('departments', 'doctors.department_id', 'departments.id');
    }


}
