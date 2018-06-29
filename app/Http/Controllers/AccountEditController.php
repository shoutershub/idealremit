<?php

namespace App\Http\Controllers;

use App\Address;
use App\BankInfomartion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class AccountEditController extends Controller
{
    //

/*    public function show(){
        return view('account.edit');
    }*/

    public function index(){

        $user_info = User::findOrFail(Auth::user());
        return view('account.edit', compact('user_info'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    public function store(Request $request){
        $input = $request->all();
        $id = Auth::user()->id;

        $rules = [
            'email'                 =>  'unique:users,email,'.$id.'|required|email',
            'firstname'                 =>  'required',
            'lastname'                 =>  'required',
            'phone'                 =>  'required',
            'address1'                 =>  'required',
        ];

        $messages = [
            'email.required'        =>  'Your emails address is required.',
            'email.unique'          =>  'That email address is already in use.',
            'firstname.required'          =>  'Your First name is required.',
            'lastname.required'          =>  'Your Last name is required.',
            'phone.required'          =>  'Your Phone Number is required.',
            'address1.required'          =>  'Contact First Address line is Required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails())
        {
            return Redirect::to('account/edit-profile')
                ->withErrors($validator)
                ->withInput();
        } else{
            $user = User::findOrFail($id);
            $user->update([
                'firstname' => $input['firstname'],
                'lastname' => $input['lastname'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'sex' => $input['sex'],
            ]);
            $user->save();

            if(Address::where('user_id', $id)->exists() === false) {
                (new Address)->create([
                    'Address_1' => $input['address1'],
                    'Address_2' => $input['address2'],
                    'Address_3' => $input['address3'],
                    'user_id' => $id,
                ]);
            }elseif(Address::where('user_id', $id)->exists()) {
                Address::where('user_id', $id)->update([
                    'Address_1' => $input['address1'],
                    'Address_2' => $input['address2'],
                    'Address_3' => $input['address3'],
                    'user_id' => $id,
                ]);

            }
        }




        return redirect()->back()->with('edit_successful', 'Account information Updated Successfully');


        /*
                $accountname = Crypt::encrypt($input['accountname']);
                $accountnumber = Crypt::encrypt($input['accountnumber']);
                $bankcountry = Crypt::encrypt($input['countrybank']);
                $bank_swift_code = Crypt::encrypt($input['bankswiftcode']);


                if(BankInfomartion::where('user_id', $id)->exists() === false) {
                    (new BankInfomartion())->create([
                        'account_name' => $accountname,
                        'account_number' => $accountnumber,
                        'bank_country' => $bankcountry,
                        'bank_swift_code' => $bank_swift_code,
                        'user_id' => $id,
                    ]);
                }elseif(BankInfomartion::where('user_id', $id)->exists()) {
                    BankInfomartion::where('user_id', $id)->update([
                        'account_name' => $accountname,
                        'account_number' => $accountnumber,
                        'bank_country' => $bankcountry,
                        'bank_swift_code' => $bank_swift_code,
                        'user_id' => $id,
                    ]);

                }*/

/*
        $bankinformation = (new \App\BankInfomartion)->update([
            'account_name' => $accountname,
            'account_number' => $accountnumber,
            'bank_country' => $bankcountry,
            'bank_swift_code' => $bank_swift_code,
            'user_id' => $id,
        ]);*/

        //$user->save();
        /*
        $bankinformation->save();*/

    }
}
