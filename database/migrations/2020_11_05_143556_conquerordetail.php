<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConquerorDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conquerordetail', function (Blueprint $table) {
            $table->increments('id'); //รหัสการส่ง

            // $table->integer('mang_id')->unsigned();

            $table->integer('user_id')->unsigned();
            $table->integer('price'); //จำนวน

            

            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::drop('conquerordetail');
        
        $table->dropForeign('conquerordetail_mang_id_foreign');
    }
}
