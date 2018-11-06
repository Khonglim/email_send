<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAPPOINTMENTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_a_p_p_o_i_n_t_m_e_n_t', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fristname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email');
            $table->string('store');
            $table->string('date');
            $table->string('message');
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
        Schema::dropIfExists('_a_p_p_o_i_n_t_m_e_n_t');
    }
}
