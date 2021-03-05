<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DealerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('dealer_table', function (Blueprint $table) {
            $table->increments('id'); //รหัสการส่ง
        
            $table->integer('users_id')->unsigned();

            $table->string('send_around'); //รอบ
            
            $table->foreign('users_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

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
        Schema::drop('dealer_table');
        $table->dropForeign('send_mangos_users_id_foreign');
    }
}
