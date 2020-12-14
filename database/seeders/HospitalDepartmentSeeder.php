<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HospitalDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $HospitalDepartment = array(
            array('hospital_id' => 1, 'department_id' => 1),
            array('hospital_id' => 2, 'department_id' => 1),
        );
        DB::table('hospital_departments')->insert($HospitalDepartment); 
    }
}
