<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;
use Illuminate\Support\Facades\DB;

class FieldValuesSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table($this->prefix_table .'field_values')->insert([
                'field_type_id'=>"{$i}",
                'user_id' => $i,
                'value'=> "value {$i}"
            ]);
        }
    }
}
