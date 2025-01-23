<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
      protected $fillable = [
        'image','sub_title','title','u_link'];
}
