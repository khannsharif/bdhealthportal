<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::updateOrCreate([
            'full_name' => 'Admin User',
            'nid_dob' => 1111111111,
            'email' => 'admin@gmail.com',
            'contact_number' => '01869384739',
            'gender' => 'male',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123'),
        ]);
        $user1->assignRole('admin');

        $user2 = User::updateOrCreate([
            'full_name' => 'Patient1 name',
            'nid_dob' => 12343433,
            'email' => 'patient1@gmail.com',
            'contact_number' => '01869385739',
            'gender' => 'male',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123'),
        ]);
        $user2->assignRole('patient');

        $user3 = User::updateOrCreate([
            'full_name' => 'Patient2 name',
            'nid_dob' => 123456789,
            'email' => 'patient2@gmail.com',
            'contact_number' => '01769384739',
            'gender' => 'male',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123'),
        ]);
        $user3->assignRole('patient');

        $user4 = User::updateOrCreate([
            'full_name' => 'Doctor1 name',
            'nid_dob' => 1232345443,
            'email' => 'doc1@gmail.com',
            'contact_number' => '01865684739',
            'gender' => 'male',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123'),
        ]);
        $user4->assignRole('doctor');

        $user5 = User::updateOrCreate([
            'full_name' => 'Doctor2 name',
            'nid_dob' => 1232345943,
            'email' => 'doc2@gmail.com',
            'contact_number' => '01865684269',
            'gender' => 'male',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123'),
        ]);
        $user5->assignRole('doctor');

        $user6 = User::updateOrCreate([
            'full_name' => 'Doctor3 name',
            'nid_dob' => 1232395443,
            'email' => 'doc3@gmail.com',
            'contact_number' => '01865684829',
            'gender' => 'female',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123'),
        ]);
        $user6->assignRole('doctor');
    }
}
