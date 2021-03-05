<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class round_send extends Model
{
    protected $table = 'round_send'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
    protected $fillable = ['round_send','round_id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment
}
