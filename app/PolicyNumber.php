<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PolicyNumber extends Model
{
    
    
    protected $fillable = [
        'order_id','policy_number','expirydateH','expirydateM','file_id'

    ];
    
}
