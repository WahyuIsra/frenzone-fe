<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genre";
    protected $primaryKey = "id";
    protected $fillable = ['genre_name','genre_cat_id'];
}
