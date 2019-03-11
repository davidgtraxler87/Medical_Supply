<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



    }
}
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'middle_name' => Str::random(10),
            'last_name' => Str::random(25),
            'institution' => Str::random(25),
            'street_address' => Str::random(4). Str::random(25).'Ave.',
            'city' => 'Tulsa',
            'state' => 'OK',
            'zip_code' => '74137',
            //'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }

}
