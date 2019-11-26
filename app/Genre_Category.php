<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre_Category extends Model
{
    protected $table = "genre_category";
    protected $primaryKey = "id";
    protected $fillable = ['genre_cat_name','genre_cat_image'];
}
