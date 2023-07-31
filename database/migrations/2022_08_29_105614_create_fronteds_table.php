<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fronteds', function (Blueprint $table) {
            $table->id();
            $table->string('StudentID')->nullable();
            $table->string('Username')->nullable();
            $table->string('Email')->nullable();
            $table->string('MobileNo')->nullable();
            $table->string('Password')->nullable();
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
        Schema::dropIfExists('fronteds');
    }
}
