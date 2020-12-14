<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('fit_posts')->insert([
                'user_id' => "user_id{$i}",
                'title' => "title{$i}",
                'content' => "content{$i}",
                'created_user_id' => 1,
                'updated_user_id' => 1,
            ]);
        }
        
    }
}
