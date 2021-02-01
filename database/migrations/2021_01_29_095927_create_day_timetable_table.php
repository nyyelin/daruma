<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayTimetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_timetable', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('timetable_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('day_id')
                    ->references('id')->on('days')
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
        Schema::dropIfExists('day_timetable');
    }
}
