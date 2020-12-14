<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientCommunityBlog extends Model
{
    use HasFactory;
    protected $table = "patient_community_blogs"; 
    protected $guarded = [];
}
