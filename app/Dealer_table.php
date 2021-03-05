<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer_table extends Model

{     protected $table = 'dealer_table'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
      protected $fillable = ['dealer_table','id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment

}
