<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Hospitals = array(
            array('bmdc_registered_number' => 238181927727555, 'hospital_name' => 'Dhaka Medical Hospital','address' => 'Dhaka', 'contact_number' => '01836691343', 'email' => 'dhakamedical@gmail.com','logo' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('bmdc_registered_number' => 238181955555558, 'hospital_name' => 'Khulna Medical Hospital','address' => 'Khulna', 'contact_number' => '01836691343', 'email' => 'khulna@gmail.com','logo' => '', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
        );
        DB::table('hospitals')->insert($Hospitals);
    }
}
