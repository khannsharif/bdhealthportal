<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PatientCommunityBlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $PatientCommunityBlogComment = array(
            array('patient_id' => 1, 'like' => 1, 'comment' => 'good', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('patient_id' => 2, 'like' => 3, 'comment' => 'good', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
          
        );
        DB::table('patient_community_blog_comments')->insert($PatientCommunityBlogComment); 
    }
}
