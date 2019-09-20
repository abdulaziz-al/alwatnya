<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackingList extends Model
{
    protected $fillable = [
        'order_id','pl_number','expirydate','file_id'

    ];
    
}
