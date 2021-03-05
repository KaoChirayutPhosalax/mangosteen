<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conqueror extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conqueror', function (Blueprint $table) {
            $table->increments('id'); //รหัสการส่ง

            // $table->integer('mang_id')->unsigned();

            $table->integer('mang_id')->unsigned();

            

            $table->foreign('mang_id')
                ->references('id')->on('mangosteen')
                ->onDelete('cascade');

            // $table->foreign('mang_id')
            // ->references('id')->on('mangosteen')
            // ->onDelete('cascade');
            
            $table->timestamps();
           
            // $table->string('send_around'); //รอบ
            
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('conqueror');
        
        $table->dropForeign('conqueror_mang_id_foreign');
    }
}
