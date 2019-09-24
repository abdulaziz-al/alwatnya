<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommercialRecord extends Model
{
    protected $fillable = [
        'user_id','order_id','file_id','cr_number','cr_expiry','active'

    ];
    
}
