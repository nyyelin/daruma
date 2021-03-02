<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddjournalvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addjournalvideos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detail_id');
            $table->text('auth_name');
            $table->text('header');
            $table->date('dob');
            $table->text('photo')->nullable();
            $table->text('subject');
            $table->text('videourl');
            $table->softDeletes();
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
        Schema::dropIfExists('addjournalvideos');
    }
}
