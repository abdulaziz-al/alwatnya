<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saso extends Model
{
    protected $fillable = [
        'order_id','saso_number','expirydateH','expirydateM','file_id'
        

    ];
}
