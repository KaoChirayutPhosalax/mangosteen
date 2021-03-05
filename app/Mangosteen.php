<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mangosteen extends Model

{     protected $table = 'Mangosteen'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
      protected $fillable = ['Mangosteen','id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment

}
