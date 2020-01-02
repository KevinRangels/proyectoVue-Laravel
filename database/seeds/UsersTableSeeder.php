<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'kevin', 'email' => 'krangel107@gmail.com', 'password' => Hash::make('1234567')]);
    }
}
