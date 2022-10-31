<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookpurshased extends Model
{
     protected $fillable = [ 'Reference', 'Title', 'Type', 'Topics', 'Year', 'Quantity', 'Price', 'User', 'status','DocId','Doc','created_at', 'updated_at','Address','Name','Email'];
}
