<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Schedule = array(
            array('available_days' => '2020-09-25', 'available_timeslot' => '9 am to 1 pm',  'per_patient_time' => 'kekjkdkd', 'serial_no' => 1, 'active_status' => 1,'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('available_days' => '2020-09-25', 'available_timeslot' => '9 am to 1 pm',  'per_patient_time' => 'kekjkdkd', 'serial_no' => 1, 'active_status' => 1,'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
          
        );
        DB::table('schedules')->insert($Schedule); 
    }
}
