<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealerdetail_table extends Model
{     
    protected $table = 'dealerdetail_table'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
    protected $fillable = ['dealerdetail_table','id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment

}