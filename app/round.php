<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class round extends Model
{
    protected $table = 'round'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
    protected $fillable = ['round','round_id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment
}
