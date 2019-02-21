<?php

use Illuminate\Database\Seeder;

class CatogoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catogory = new \App\Catogory();
        $catogory->name = 'Chuyen doi';
        $catogory->save();

        $catogory = new \App\Catogory();
        $catogory->name = 'Chuyen nghe';
        $catogory->save();
    }
}
