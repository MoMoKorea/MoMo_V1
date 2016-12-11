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

        App\User::create([
            'email' => 'dydrhs23@gmail.com',
            'password' => 'd120452',
            'username' => 'dydrhs23'
        ]);
    }
}
