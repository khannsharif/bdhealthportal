<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NoticedboardSeeder extends Seeder

{
    /**ss
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Noticedboard = array(
            array('title' => 'A',  'description' => 'kekjkdkd', 'publish_date' => '2020-09-24',  'active_status' => 1,'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('title' => 'B',  'description' => 'kekjkdkd', 'publish_date' => '2020-09-24', 'active_status' => 2,'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
          
        );
        DB::table('noticedboards')->insert($Noticedboard); 
    }
}
