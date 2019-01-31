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
 //       $user->id = 8;
        $user->name = 'Tran Dung';
        $user->email = 'Durotan@gmail.com';
        $user->password = '123456';
        $user->save();

        $user = new \App\User();
//        $user->id = 9;
        $user->name = 'Phi Diep';
        $user->email = 'letrinh@gmail.com';
        $user->password = '1234567';
        $user->save();

        $user = new \App\User();
//        $user->id = 10;
        $user->name = 'Le Trinh';
        $user->email = 'Diep@gmail.com';
        $user->password = '1234568';
        $user->save();
    }
}
