<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable = [
        'user_id',
        'Address_1',
        'Address_2',
        'Address_3',
        'Address_4',
    ];

    public function address()
    {
        return $this->belongsTo('App\User');
    }
}
