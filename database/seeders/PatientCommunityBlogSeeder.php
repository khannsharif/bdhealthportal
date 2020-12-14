<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PatientCommunityBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $PatientCommunityBlog = array(
            array('title' => 'A', 'author_name' => 'Ahamed', 'picture' => '',  'description' => 'kekjkdkd', 'publish_date' => '2020-09-24', 'active_status' => 1,'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('title' => 'B', 'author_name' => 'Khan', 'picture' => '',  'description' => 'kekjkdkd', 'publish_date' => '2020-09-24', 'active_status' => 1,'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
        );
        DB::table('patient_community_blogs')->insert($PatientCommunityBlog); 
    }
}
