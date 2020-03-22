<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEJobInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_job_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('e_id')->unsigned();

            $table->string('designation');
            $table->string('salary');
            $table->string('bonus');
            $table->string('joindate');
            $table->string('resigndate')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('e_id')->references('id')->on('employee_infos')->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e_job_infos');
    }
}
