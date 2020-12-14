<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Appointment = array(
            array('patient_id' => 2, 'department_id' => 1, 'hospital_id' => 1, 'appointment_date' => '2020-09-25', 'appointment_time' => Carbon::now()->format('Y-m-d H:i:s'), 'serial_no' => 1, 'problem' => 'Headache disorders', 'active_status' => '1','created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('patient_id' => 3, 'department_id' => 2, 'hospital_id' => 2, 'appointment_date' => '2020-09-25', 'appointment_time' => Carbon::now()->format('Y-m-d H:i:s'), 'serial_no' => 1, 'problem' => ' hormone disorders', 'active_status' => '1','created_at' => Carbon::now()->format('Y-m-d H:i:s'))
        );
        DB::table('appointments')->insert($Appointment);
    }
}
