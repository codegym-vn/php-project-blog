<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->name = 'Chuyen doi';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Chuyen nghe';
        $category->save();
    }
}
