<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('timetable_id');
            $table->string('amount')->default(0);
            $table->string('discount')->default(0);
            $table->integer('status')->default(0);//ငွေပေးပုံ ယန်း = 0 ကျပ် = 1
            $table->unsignedBigInteger('paymenttype_id')->nullable();
            $table->unsignedBigInteger('staff_id');
            $table->text('note')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('student_id')
                    ->references('id')->on('students')
                    ->onDelete('cascade');


            $table->foreign('paymenttype_id')
                    ->references('id')->on('paymenttypes')
                    ->onDelete('cascade');

            $table->foreign('staff_id')
                    ->references('id')->on('staffs')
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
        Schema::dropIfExists('payments');
    }
}
