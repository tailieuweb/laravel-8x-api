<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;

class PhoneSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = array('Vina', 'Viettel', 'Mobilephone');
        for ($i = 1; $i < 10; $i++) {
            $rand_keys = array_rand($type, 1);
            DB::table('phones')->insert([
                'user_id' => $i,
                'phone_type' =>  $type[$rand_keys],
            ]);
        }
        
    }
}
