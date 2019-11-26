<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = "program";
    protected $primaryKey = "id";
    protected $fillable = ['program_name'];
}
