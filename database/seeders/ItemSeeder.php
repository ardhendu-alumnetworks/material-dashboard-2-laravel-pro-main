<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'Jacket',
            'description' => 'Stay in touch with the latest trends',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id'=> 1,
            'picture' => 'pictures/img1.jpg',
            'status'=>'draft',
            'date' =>now(),
        ]);

        DB::table('items')->insert([
            'name' => 'Bread',
            'description' => 'Our favourite recipes',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id'=> 2,
            'picture' => 'pictures/img2.jpg',
            'status'=>'published',
            'date' =>now(),
        ]);

        DB::table('items')->insert([
            'name' => 'Pills',
            'description' => 'An apple a day keeps the doctor away',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id'=> 3,
            'picture' => 'pictures/img3.jpg',
            'status'=>'archive',
            'date' =>now(),
        ]);

        DB::table('item_tag')->insert(
            [
                'item_id' => 1,
                'tag_id' => 1,
            ]
        );

        DB::table('item_tag')->insert(
            [
                'item_id' => 1,
                'tag_id' => 2,
            ]
        );

        DB::table('item_tag')->insert(
            [
                'item_id' => 1,
                'tag_id' => 3,
            ]
        );

        DB::table('item_tag')->insert(
            [
                'item_id' => 2,
                'tag_id' => 1,
            ]
        );

        DB::table('item_tag')->insert(
            [
                'item_id' => 3,
                'tag_id' => 1,
            ]
        );
    }
}
