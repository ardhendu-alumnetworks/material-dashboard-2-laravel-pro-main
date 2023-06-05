<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Fashion',
            'description' => 'Stay in touch with the latest trends',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Food',
            'description' => 'Our favourite recipes',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Health',
            'description' => 'An apple a day keeps the doctor away',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
