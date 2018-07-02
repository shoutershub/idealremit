<?php

namespace App\Http\Controllers;


use App\Mail\AppMailer;
use App\Surport;
use App\Surport_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurportController extends Controller
{
    //

    public function create()
    {
        $categories = Surport_type::all();

        return view('account.surports.create', compact('categories'));
    }
    //, AppMailer $mailer
    public function store(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'title'     => 'required',
            'support_type'  => 'required',
            'priority'  => 'required',
            'message'   => 'required'
        ]);

        $support = new Surport([
            'title'     => $request->input('title'),
            'user_id'   => Auth::user()->id,
            'surport_id' => strtoupper(str_random(10)),
            'surport_type_id'  => $request->input('support_type'),
            'priority'  => $request->input('priority'),
            'message'   => $request->input('message'),
            'status'    => "Open",
        ]);

        $let_us_save_the_ticket = $support->save();

        if($let_us_save_the_ticket){
            $mailer->sendTicketInformation(Auth::user(), $support);
        }

        return redirect()->back()->with("status", "A New Support ticket with ID: #$support->surport_id has been opened.");
    }
}