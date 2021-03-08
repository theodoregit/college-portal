<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEconomicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coursename');
            $table->string('coursenumber');
            $table->integer('year');
            $table->integer('semester');
            $table->integer('credithr');
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
        Schema::dropIfExists('economics');
    }
}
