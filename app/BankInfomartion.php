<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankInfomartion extends Model
{
    //
    protected $fillable = [
        'user_id',
        'account_name',
        'account_number',
        'bank_country',
        'bank_swift_code',
    ];

    public function bankinformation()
    {
        return $this->belongsTo(User::class);
    }
}
