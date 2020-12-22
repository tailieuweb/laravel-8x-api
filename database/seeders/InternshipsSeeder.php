<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InternshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('internships')->insert([
                'user_id' => "user_id{$i}",
                'company_id' => "company_id{$i}",
                'course_id' => "course_id{$i}",
                
            ]);
        }
    }
}
