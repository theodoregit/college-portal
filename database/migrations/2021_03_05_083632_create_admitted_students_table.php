<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmittedStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admitted_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('studentname');
            $table->string('idnumber');
            $table->string('coursename');
            $table->float('assessment')->default(0);
            $table->float('project')->default(0);
            $table->float('finalexam')->default(0);
            $table->float('sum')->default(0);
            $table->string('grade')->default('NG');
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
        Schema::dropIfExists('admitted_students');
    }
}
