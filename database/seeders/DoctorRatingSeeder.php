<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DoctorRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $DoctorRating = array(
            array('patient_id' => 1, 'doctor_id' => 1,  'rating_value' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
          
        );
        DB::table('doctor_ratings')->insert($DoctorRating); 
    }
}
