<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        $cName = 'Без категории';
        $categories[] = [
            'title' => $cName,
            Str::of($cName)->slug(),
            'parent_id' => 0,
        ];
    }
}
