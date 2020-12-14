<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Department = array(
            array('department_name' => 'Neurosurgery',  'description' => 'The neurologist treats disorders that affect the brain, spinal cord, and nerves, such as: Cerebrovascular disease, such as stroke.', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('department_name' => 'Gynecology',  'description' => 'Gynecologists are medical healthcare specialists that diagnose and treat gynecological conditions as well as advise patients on birth control and fertility matters. ', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
          
        );
        DB::table('departments')->insert($Department); 
    }
}
