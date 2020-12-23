<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;

class PostSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('posts')->insert([
                'user_id' => rand(1,10),
                'title' => 'foo',
                'content' => 'Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry'
            ]);
        }
        
    }
}
