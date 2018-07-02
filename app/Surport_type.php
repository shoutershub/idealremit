<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surport_type extends Model
{
    //
    protected $fillable = ['name'];

    public function tickets()
    {
        return $this->hasMany(Surport::class);
    }
}
