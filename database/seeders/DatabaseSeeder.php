<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PatientRegistrationSeeder::class);
        $this->call(DepartmentSeeder::class);
        //$this->call(HospitalRegistrationSeeder::class);
        $this->call(HospitalSeeder::class);
        //$this->call(DoctorRegistrationSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(NoticedboardSeeder::class);
        $this->call(PatientCommunityBlogSeeder::class);
        $this->call(PatientCommunityBlogCommentSeeder::class);
        $this->call(BloodCommunitySeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(AppointmentSeeder::class);
        $this->call(PrescriptionSeeder::class);
        $this->call(DoctorRatingSeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(HospitalDepartmentSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogviewSeeder::class);




    }
}
