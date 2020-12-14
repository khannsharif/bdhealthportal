<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Contact= array(
            array('patient_id' => 1, 'hospital_id' => 1, 'message' => '',  'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
          
        );
        DB::table('contacts')->insert($Contact); 
    }
}
