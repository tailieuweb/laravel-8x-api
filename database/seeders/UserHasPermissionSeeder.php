<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;

class UserHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_has_permissions')->insert([
                'user_id' => 1,
                'permission_id' => 1,
            ]);
        DB::table('user_has_permissions')->insert([
                'user_id' => 1,
                'permission_id' => 2,
            ]);
        DB::table('user_has_permissions')->insert([
                'user_id' => 1,
                'permission_id' => 3,
            ]);
        
        DB::table('user_has_permissions')->insert([
                'user_id' => 2,
                'permission_id' => 4,
            ]);
        DB::table('user_has_permissions')->insert([
                'user_id' => 2,
                'permission_id' => 5,
            ]);
        DB::table('user_has_permissions')->insert([
                'user_id' => 2,
                'permission_id' => 6,
            ]);
    }
}
