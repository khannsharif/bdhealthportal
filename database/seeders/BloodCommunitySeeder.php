<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodCommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $BloodCommunity = array(
            array('blood_group' => 'A+', 'donation_date' => '2020-09-25', 'contact_person_name' => 'Khan', 'phone_number' => '01836691345', 'location' => 'Panthapath',  'available_date' => '2020-09-25 ', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('blood_group' => 'A+', 'donation_date' => '2020-09-25', 'contact_person_name' => 'Khan', 'phone_number' => '01836691345', 'location' => 'Panthapath',  'available_date' => '2020-09-25 ', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
          
        );
        DB::table('blood_communities')->insert($BloodCommunity); 
    }
}
