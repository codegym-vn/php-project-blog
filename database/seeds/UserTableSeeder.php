<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $user->name = 'Tran Dung';
        $user->email = 'Durotan@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new \App\User();
        $user->name = 'Phi Diep';
        $user->email = 'letrinh@gmail.com';
        $user->password = Hash::make('1234567');
        $user->save();

        $user = new \App\User();
        $user->name = 'Le Trinh';
        $user->email = 'Diep@gmail.com';
        $user->password = Hash::make('1234568');
        $user->save();
    }
}
