<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $PatientRegistration = array(
            array('address' => 'Panthapath', 'date_of_birth' => '2020-09-24', 'blood_group' => 'O+',
                'active_status' => 1, 'user_id'=> 2 ),

            array('address' => 'Dhanmondi', 'date_of_birth' => '2020-03-30', 'blood_group' => 'A+',
                'active_status' => 1, 'user_id'=> 3 )
        );
        DB::table('patient_registrations')->insert($PatientRegistration);
    }
}

/**
DB::table('patient_registrations')->insert([
    'nid_dob' => '333333',
    'full_name' => 'John Doe',
    'email' => 'admin@gmail.com',
    'password' => bcrypt('123456'),
    'address' => 'Panthapath',
    'contact_number' => '01834838',
    'date_of_birth' => '2020-09-24',
    'gender' => '1',
    'blood_group' => 'O+',
    'active_status' => '1',
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
]);
*/
