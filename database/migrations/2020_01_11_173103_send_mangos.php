<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SendMangos extends Migration
{    
    protected $table ='send_mangos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_mangos', function (Blueprint $table) {
            $table->increments('id'); //รหัสการส่ง
            // $table->integer('sum_id')->unsigned();
            // $table->foreign('sum_id')->references('id')->on('summary_mangos ');
            // $table->integer('far_id')->unsigned();
            // $table->foreign('far_id')->references('id')->on('farmer');
            // $table->integer('mang_id')->unsigned();
            // $table->foreign('mang_id')->references('id')->on('mangosteen');


            //$table->integer('mang_id')->unsigned();
            $table->integer('users_id')->unsigned();
            //$table->decimal('send_weight',6,2);//ราคา
            $table->string('send_around'); //รอบ
            // $table->string('send_amount'); //จำนวน
            // $table->string('send_result'); //ผลประมูล
            
            $table->dateTime('send_date'); //;date

            $table->foreign('users_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            //     $table->foreign('mang_id')
            // ->references('id')->on('mangosteen')
            // ->onDelete('cascade');


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
        Schema::table('send_mangos', function($table)
        {
            Schema::drop('send_mangos');
            $table->dropForeign('send_mangos_users_id_foreign');
            // $table->dropForeign('send_mangos_mang_id_foreign');
        });

    }
}
