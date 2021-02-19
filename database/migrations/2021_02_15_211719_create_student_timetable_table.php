<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTimetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_timetable', function (Blueprint $table) {
             $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('timetable_id');
            $table->string('status');
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
        Schema::dropIfExists('student_timetable');
    }
}
