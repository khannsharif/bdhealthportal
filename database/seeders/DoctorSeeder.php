<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Doctors = array(
            array('user_id'=> 4, 'hospital_id' => 1, 'department_id' => 1, 'bmdc_registered_number' => 333344314333, 'address' => 'Dhaka', 'designation' => 'A', 'short_biography' => 'kkkkk', 'specialist' => 'A', 'date_of_birth' => '2020-09-24', 'blood_group' => 'A+', 'education' => 'MD', 'active_status' => 1),
            array('user_id'=> 5, 'hospital_id' => 2, 'department_id' => 2, 'bmdc_registered_number' => 111433333000, 'address' => 'Khulna', 'designation' => 'B', 'short_biography' => 'jjjjj', 'specialist' => 'B', 'date_of_birth' => '2020-09-24', 'blood_group' => 'A+', 'education' => 'FCPS', 'active_status' => 1),
            array('user_id'=> 6, 'hospital_id' => 2, 'department_id' => 1, 'bmdc_registered_number' => 233399989889, 'address' => 'Cumilla', 'designation' => 'C', 'short_biography' => 'sssss', 'specialist' => 'C', 'date_of_birth' => '2020-09-24', 'blood_group' => 'A+', 'education' => 'Medicine', 'active_status' => 1)
        );
        DB::table('doctors')->insert($Doctors);
    }
}
