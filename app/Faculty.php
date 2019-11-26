<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = "faculty";
    protected $primaryKey = "id";
    protected $fillable = ['faculty_name','program_id'];
}
