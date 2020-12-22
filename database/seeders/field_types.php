<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class field_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        for ($i = 0; $i < 10; $i++) {
            DB::table('field_types')->insert([
                'id' => "id{$i}",
                'name' => "abc {$i}",
                'type' => 1,
                'decription' => 1,
                'placeholder' => 1,
                'field_category_id' => 1,
                'status' => 1,
                
            ]);
        }
    }
}
