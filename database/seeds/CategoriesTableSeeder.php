<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
use App\Category;
>>>>>>> feature_crud_user

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        factory(App\Category::class, 10)->create();
=======
    	Model::unguard();

		factory(Category::class, 100)->create();

		Model::reguard();	
>>>>>>> feature_crud_user
    }
}
