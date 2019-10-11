<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLogs extends Model
{
    protected $fillable = [
        'user_id','source_ip','description','created_on'

    ];
    public $timestamps = false;

}
