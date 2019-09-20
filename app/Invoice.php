<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
   
    protected $fillable = [
        'invoiceItems_id'

    ];
    public $timestamps = false;

}
