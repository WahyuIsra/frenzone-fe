<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "event";
    protected $primaryKey = "id";
    protected $fillable = ['user_id','title','date','genre_id','image','location_lat','location_lng','maximal_slot','description'];
}
