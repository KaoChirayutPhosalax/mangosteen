<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundSendDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('round_send_details', function (Blueprint $table) {
            $table->integer('send_id')->unsigned();
            $table->foreign('send_id')->references('send_id')->on('round');
            $table->integer('mango_no')->unsigned();
            $table->foreign('mango_no')->references('mango_no')->on('mangosteen');
            $table->integer('amout');
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
        Schema::dropIfExists('round_send_details');
    }
}
