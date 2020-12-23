<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;

class CountrySeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array('VN', 'JP', 'EN');
        
        for ($i = 0; $i < 3; $i++) {
            DB::table('countries')->insert([
                'country_name' => $countries[$i],
            ]);
        }
        
    }
}
