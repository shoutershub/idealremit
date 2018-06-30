<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    //
    public function store(Request $request){
        //return view('errors.404');
        return response()->json(['errors'=>'Old Password entered does not match any of our records']);
    }
}
