<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
       protected $fillable = [
        'BookRef', 'User_Ref',
    ];

}
