<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['country_id', 'name'];

    public function category()
    {
        return $this->belongsTo(Country::class);
    }
}
