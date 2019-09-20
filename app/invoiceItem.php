<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoiceItem extends Model
{
    protected $fillable = [
        'invoiceItems_description','subtotal'

    ];
    public $timestamps = false;
 }
