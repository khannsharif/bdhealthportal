<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Report = array(
            array('prescription_id' => 1, 'report_name' => 'A', 'report_price' => 449.5,  'paid' => 449.5, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('prescription_id' => 2, 'report_name' => 'A', 'report_price' => 449.5,  'paid' => 449.5, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'))
          
        );
        DB::table('reports')->insert($Report); 
    }
}
