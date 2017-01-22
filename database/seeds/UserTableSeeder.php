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
            'password' => bcrypt(getPasswordWithSalt('dd120452')),
            'username' => 'dydrhs23'
        ]);

        $locations = ['강서구', '마포구', '강남구', '송파구'];
        foreach ($locations as $index => $location) {
            App\Location::create([
                'name' => $location,
                'order' => (($index + 1) * 10),
            ]);
        }

    }
}
