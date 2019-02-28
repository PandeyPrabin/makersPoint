<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laravel extends Model
{
     protected $fillable = ['name', 'gender', 'city', 'email', 'password','mobile','image'];
}
