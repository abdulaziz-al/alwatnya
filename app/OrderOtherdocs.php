<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderOtherdocs extends Model
{
    protected $fillable = [
        'order_id','ood_number','expirydate','ood_name','file_id'

    ];
}
