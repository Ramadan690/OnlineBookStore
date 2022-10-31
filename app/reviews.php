<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
     protected $fillable = ['id','user_Reference','Reviews','Books_Reference'];
 }
