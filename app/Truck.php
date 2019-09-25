<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $fillable = [
        'driver_name','driver_mobile_1','driver_mobile_2','order_id','Truck_ownership_number','file_id'
    

    ];

}
