<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMoney extends Controller
{
    //

    public function index(){
        return view('account.send-money');
    }
}
