<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('checks')->insert([
                'check_id' => $i,
                'user_id' => 1,
                'check_name' => "Bài {$i}: The name check is {$i}",
                'check_overview' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta con {$i}",
                "check_description" =>  "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta con {$i}",
                'check_slug' => "the-name-is-check-{$i}",
                'redmine_id' => "10{$i}",
                'redmine_url' => "the-redmine-url-{$i}",
                'check_status' => 99,
                'created_at' =>  gmdate('Y-m-d H:i:s', time() + 7 * 3600),
                'updated_at' =>  gmdate('Y-m-d H:i:s', time() + 7 * 3600),
            ]);
            for ($j = 1; $j <= 5; $j++) {
                DB::table('checklists')->insert([
                    'check_id' => $i,
                    'user_id' => 1,
                    'context_id' => 1,
                    'context_type' => 'test',
                    'status' => 99,
                    'created_at' => gmdate('Y-m-d H:i:s', time() + 7 * 3600),
                    'updated_at' =>  gmdate('Y-m-d H:i:s', time() + 7 * 3600),
                ]);
            }
        }
    }
}
