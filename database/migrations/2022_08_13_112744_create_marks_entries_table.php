<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks_entries', function (Blueprint $table) {
            $table->id();
            $table->string('StudentId')->nullable();
            $table->string('StudentClass')->nullable();
            $table->string('StudentYear')->nullable();
            $table->string('StudentSubject')->nullable();
            $table->string('StudentGrade')->nullable();
            $table->string('TotalMarks')->nullable();
            $table->string('ObtainMarks')->nullable();
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
        Schema::dropIfExists('marks_entries');
    }
}
