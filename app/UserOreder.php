<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOreder extends Model
{
    protected $fillable = [
        'user_id','admin_id','cr_id','invoice_id','importeport_id','number_of_trucks','status_id','seen'

    ];

}
