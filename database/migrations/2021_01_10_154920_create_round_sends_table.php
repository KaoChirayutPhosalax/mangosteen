<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('round_sends', function (Blueprint $table) {
            $table->integer('send_id');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->date('send_date');
            $table->timestamps('send_time');
            $table->integer('total_wg');
            $table->integer('loss_wg');
            $table->string('send_status');
            $table->integer('round_id ')->unsigned();
            $table->foreign('round_id ')->references('round_id ')->on('round');
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
        Schema::dropIfExists('round_sends');
    }
}
