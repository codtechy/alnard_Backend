<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serviceslide extends Model
{
    protected $fillable = ['words', 'name', 'service_id'];

    public function category()
    {
        return $this->belongsTo(Service::class);
    }
}
