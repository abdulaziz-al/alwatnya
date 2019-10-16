<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coo extends Model
{
    
    protected $fillable = [
        'order_id','coo_number','expirydate','file_id'

    ];
 
}
