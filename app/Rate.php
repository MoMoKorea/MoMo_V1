<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    //

    protected $table = 'rates';

    protected $fillable = [
        'user_id',
        'sitter_id',
        'rate',
        'comment',
        'feedback'
    ];

}
