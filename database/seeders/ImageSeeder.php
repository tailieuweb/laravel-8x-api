<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;

class ImageSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $imageable = array('App\Models\Post', 'App\Models\User');
        
        for ($i = 0; $i < 3; $i++) {
            DB::table('images')->insert([
                'imageable_id' => rand(1,5),
                'imageable_type' => $imageable[rand(0,1)],
            ]);
        }
        
    }
}
