<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = ['id', 'Reference', 'image', 'Title', 'Author1', 'Author2', 'Author3', 'Publisher', 'Type', 'themes', 'Topics', 'price', 'Year', 'Pages', 'Chapter', 'core', 'Abstract','stock','Introduction', 'created_at', 'updated_at'];
}
