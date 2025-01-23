<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'words', 'image'];

    public function prods()
    {
        return $this->hasMany(Serviceslide::class);
    }
}
