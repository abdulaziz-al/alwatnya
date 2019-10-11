<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminLogs extends Model
{
    protected $fillable = [
        'admin_id','source_ip','description','created_on'

    ];
    public $timestamps = false;

}
