<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Database\Seeders\BaseSeeder;

class PermissionSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('permissions')->insert([
                'permission_name' => "admin",
            ]);
            DB::table('permissions')->insert([
                'permission_name' => "user",
            ]);
            DB::table('permissions')->insert([
                'permission_name' => "guest",
            ]);
            DB::table('permissions')->insert([
                'permission_name' => "view",
            ]);
            DB::table('permissions')->insert([
                'permission_name' => "editor",
            ]);
    }
}
