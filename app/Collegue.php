<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collegue extends Model
{
    protected $table = "collegue";
    protected $primaryKey = "id";
    protected $fillable = ['name','nim','gender','password','email','role_id','faculty_id'];
}
