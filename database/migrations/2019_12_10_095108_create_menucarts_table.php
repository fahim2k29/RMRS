<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenucartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menucarts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->ipAddress('customer_ip');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('product_id');
            $table->integer('product_quantity')->default(1);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menucarts');
    }
}
