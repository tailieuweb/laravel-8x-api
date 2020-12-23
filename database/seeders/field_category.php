<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class field_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('field_categories')->insert([
                'id' => "id {$i}",
                'name' => "abc {$i}",
                'status' => 1,
            ]);
        }
    }
}
