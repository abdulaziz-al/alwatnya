<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exemptionLetter extends Model
{
 
    protected $fillable = [
        'order_id','el_number','expirydate','file_id'

    ];
}
