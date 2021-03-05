<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DealerdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealerdetail_table', function (Blueprint $table) {
            $table->increments('id'); //รหัสการส่ง
        
            

            $table->integer('dealer_table_id')->unsigned();
            $table->integer('mang_id')->unsigned();
             
           
            // $table->string('send_around'); //รอบ
            $table->integer('price'); //จำนวน

            $table->string('type');
            

            $table->foreign('dealer_table_id')
            ->references('id')->on('dealer_table')
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
        Schema::table('dealerdetail_table', function($table)
        {
            Schema::drop('dealerdetail_table');
           
            $table->dropForeign('dealerdetail_table_mang_id_foreign');
            $table->dropForeign('dealerdetail_table_dealer_table_id_foreign');
        });
    }
}
