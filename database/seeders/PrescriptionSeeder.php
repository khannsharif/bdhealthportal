<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Prescription = array(
            array('appointment_id' => 1, 'patient_id'=> 2, 'doctor_id'=> 5, 'cheif_complain' => 'ddddd',  'medicine_description' => 'Dhaka', 'report' => '', 'note' => '',  'type' => '1', 'active_status' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('appointment_id' => 2, 'patient_id'=> 3,  'doctor_id'=> 6, 'cheif_complain' => 'ddddd',  'medicine_description' => 'Dhaka',  'report' => '', 'note' => '',  'type' => '1', 'active_status' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'))
        );
        DB::table('prescriptions')->insert($Prescription);
    }
}
