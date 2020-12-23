<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;

class PhoneNumSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i = 1; $i < 10; $i++) {
            
            DB::table('phone_nums')->insert([
                'phone_id' => $i,
                'phone_num' => rand(100, 900)
            ]);
        }
        
    }
}
