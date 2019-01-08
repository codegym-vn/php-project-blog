<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tran Dung',
            'email' => 'Durotan.1102@gmail.com',
            'password' => '123456',
            'address' => 'Ha Noi',
            'phone' => '0345240033'
        ]);

    }
}
