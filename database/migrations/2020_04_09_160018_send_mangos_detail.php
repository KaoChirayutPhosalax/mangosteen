<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SendMangosDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_mangos_detail', function (Blueprint $table) {
            $table->increments('id'); //รหัสการส่ง
            // $table->integer('sum_id')->unsigned();
            // $table->foreign('sum_id')->references('id')->on('summary_mangos ');
            // $table->integer('far_id')->unsigned();
            // $table->foreign('far_id')->references('id')->on('farmer');
            // $table->integer('mang_id')->unsigned();
            // $table->foreign('mang_id')->references('id')->on('mangosteen');

            $table->integer('send_mangos_id')->unsigned();
            $table->integer('mang_id')->unsigned();
             
           
            // $table->string('send_around'); //รอบ
            $table->integer('send_amount'); //จำนวน
         

            

            $table->foreign('send_mangos_id')
            ->references('id')->on('send_mangos')
            ->onDelete('cascade');
            
            $table->foreign('mang_id')
            ->references('id')->on('mangosteen')
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
        Schema::table('send_mangos_detail', function($table)
        {
            Schema::drop('send_mangos_detail');
           
            $table->dropForeign('send_mangos_detail_mang_id_foreign');
            $table->dropForeign('send_mangos_detail_send_mangos_id_foreign');
        });

    }
}
