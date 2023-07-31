<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_courses', function (Blueprint $table) {
            $table->id();
            $table->string('FName')->nullable();
            $table->string('LName')->nullable();
            $table->string('Course')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Message')->nullable();
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
        Schema::dropIfExists('f_courses');
    }
}
