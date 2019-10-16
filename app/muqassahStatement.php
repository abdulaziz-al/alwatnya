<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muqassahStatement extends Model
{
    
    protected $fillable = [
        'order_id','ms_number','expirydate','file_id'

    ];
    
}
