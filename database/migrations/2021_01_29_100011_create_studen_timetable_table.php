<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenTimetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studen_timetable', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('timetable_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('student_id')
                    ->references('id')->on('students')
                    ->onDelete('cascade');

            $table->foreign('timetable_id')
                    ->references('id')->on('timetables')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studen_timetable');
    }
}
