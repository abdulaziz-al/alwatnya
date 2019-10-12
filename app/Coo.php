<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coo extends Model
{
    
    protected $fillable = [
        'order_id','coo_number','expirydateH','expirydateM','file_id'

    ];
 
}
