<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Blog= array(
            array('title' => 'test', 'image' => '', 'description' => 'sss',  'author' => 'tt', 'publish_date' => '2020-09-24', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
          
        );
        DB::table('blogs')->insert($Blog); 
    }
}
