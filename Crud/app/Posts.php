<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable =['naam','adres', 'email'];
    protected $dates = ['created_at', 'updated_at'];
}
