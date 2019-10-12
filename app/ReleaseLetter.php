<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReleaseLetter extends Model
{
  
    protected $fillable = [
        'order_id','rl_number','expirydateH','expirydateM','file_id'
        
      
    ];
}
