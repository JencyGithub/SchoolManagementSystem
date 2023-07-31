<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('FName')->nullable();
            $table->string('LName')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Stream')->nullable();
            $table->string('DOB')->nullable();
            $table->string('Email')->nullable();
            $table->string('Password')->nullable();
            $table->string('MobileNo')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
