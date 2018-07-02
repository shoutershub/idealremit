<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surport extends Model
{
    //
    protected $fillable = [
        'user_id', 'surport_type_id', 'surport_id', 'title', 'priority', 'message', 'status'
    ];

    public function surport_type()
    {
        return $this->belongsTo(Surport_type::class);
    }
}