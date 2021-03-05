<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class round_send_detail extends Model
{
    protected $table = 'round_send_detail'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
    protected $fillable = ['send_id','mango_no','amout'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment
}
