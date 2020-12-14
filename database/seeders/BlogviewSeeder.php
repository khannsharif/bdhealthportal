<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $BlogView= array(
            array('ip_address' => '127.0.0.1',  'blog_id' => 6, 'user_id' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
          
        );
        DB::table('blog_views')->insert($BlogView); 
    }
}
