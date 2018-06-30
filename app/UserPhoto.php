<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPhoto extends Model
{
    //
    protected $fillable = [
        'path',
        'user_id',
    ];

    public function users(){
        $this->belongsTo('App\Users');
    }
}
