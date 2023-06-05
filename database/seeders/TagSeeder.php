<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'HOT',
            'color' => '#ea0606',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'name' => 'COLD',
            'color' => '#17c1e8',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'name' => 'TRENDING',
            'color' => '#cb0c9f',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
