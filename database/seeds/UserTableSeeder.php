<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->id = 2;
        $user->name = 'Tran Dung';
        $user->email = 'Durotan@gmail.com';
        $user->password = '123456';
        $user->save();

        $user = new \App\User();
        $user->id = 3;
        $user->name = 'Phi Diep';
        $user->email = 'Durotan1@gmail.com';
        $user->password = '123456';
        $user->save();

        $user = new \App\User();
        $user->id = 4;
        $user->name = 'Le Trinh';
        $user->email = 'Durotan2@gmail.com';
        $user->password = '123456';
        $user->save();
    }
}
