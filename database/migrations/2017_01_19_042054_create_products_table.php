<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
<<<<<<< HEAD
            $table->string('name', 255);
            $table->integer('price')->unsigned();
            $table->integer('sale_price')->unsigned()->nullable();
=======
            $table->string('name', 100);
            $table->string('description', 300)->nullable();
            $table->decimal('price')->unsigned();
            $table->decimal('discount_price')->unsigned();
>>>>>>> feature_crud_user
            $table->enum('status', ['available','unavailable'])->default('available');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
