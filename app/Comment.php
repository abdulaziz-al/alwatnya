<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment_description','comment_by_user','comment_to_user'

    ];
   
    
}
