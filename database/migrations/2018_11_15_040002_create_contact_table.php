<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name',100);
            $table->char('phonenumber',100);
            $table->char('email',100);
            $table->char('subject',100);
            $table->char('message',100);
            $table->char('day',100);
            $table->char('time',100);
            $table->char('ip',100);
            $table->char('page',100);
            $table->char('status',100);
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
        Schema::dropIfExists('contact');
    }
}
