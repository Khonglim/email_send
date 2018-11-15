<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->increments('id');
            $table->char('firstname',100)->nullable();
            $table->char('lastname',100)->nullable();
            $table->char('email',100)->nullable();
            $table->char('phonenumber',100)->nullable();
            $table->char('store',100)->nullable();
            $table->char('date_reserve',100)->nullable();
            $table->string('message',500)->nullable();
            $table->char('day',100)->nullable();
            $table->char('time',100)->nullable();
            $table->char('ip',100)->nullable();
            $table->char('page',100)->nullable();
            $table->char('status',100)->nullable();
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
        Schema::dropIfExists('appointment');
    }
}
