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
        $user = new User();
        $user->email = "user@gmail.com";
        $user->password = "111111";
        $user->first_name = "Lorem";
        $user->last_name = "Ipsum";
        $user->save();
    }
}
