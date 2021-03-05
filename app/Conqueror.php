<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conqueror extends Model

{     protected $table = 'Conqueror'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
      protected $fillable = ['Conqueror','id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment

}
