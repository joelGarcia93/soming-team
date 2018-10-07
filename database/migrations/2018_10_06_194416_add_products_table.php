<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name_spanish');
          $table->string('name_english');
          $table->string('description_spanish');
          $table->string('description_english');
          $table->integer('price');
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::drop('products');
    }
}
