<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('time');
            $table->unsignedBigInteger('level_id');
            $table->date('start_date');
            $table->string('duration');
            $table->string('fees');
            $table->text('description')->nullable();
            $table->integer('status');//0 = online || 1 = offline
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('level_id')
                    ->references('id')->on('levels')
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
        Schema::dropIfExists('timetables');
    }
}
