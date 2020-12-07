<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'title' => "Video Seeder",
            'url' => "laravel.com/docs/8.x/seeding",
            'created_at' => date("Y-m-d H:i:s"),
            'delete_at' => date("Y-m-d H:i:s") ,
            'update_at' => date("Y-m-d H:i:s") ,
        ]);
    }
}
