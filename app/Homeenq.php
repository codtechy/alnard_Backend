<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homeenq extends Model
{
    protected $fillable = ['name', 'comment', 'phone', 'service', 'date','time'];
}
