<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('product_code');
            $table->string('product_image')->nullable();
            $table->string('name');
            $table->bigInteger('cat_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->string('description');
            $table->string('price');
            $table->bigInteger('stock_quantity');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('categories')->onCascade('delete');
            $table->foreign('type_id')->references('id')->on('food_types')->onCascade('delete');


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
