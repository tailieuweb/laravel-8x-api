<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('courses')->insert([
                'id' => "id{$i}",
                'name' => "abc {$i}",
                'user_id' => 1,
                'start_time' => 1,
                'end_time' => 1,
                'year' => 1,
                'semester' => 1,
                'field_category_id' => 1,
                'num_week' => 1,
                'status' => 1,
                
            ]);
        }
    }
}