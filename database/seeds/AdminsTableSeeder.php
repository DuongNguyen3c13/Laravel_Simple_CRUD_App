<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->email = "admin@gmail.com";
        $admin->password = "111111";
        $admin->name = 'Duong Nguyen';
        $admin->image = 'img/123.jpg';
        $admin->save();
    }
}
