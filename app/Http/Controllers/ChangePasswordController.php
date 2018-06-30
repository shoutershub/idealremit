<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class Empty1 extends Exception{}
class Empty2 extends Exception{}
class Empty3 extends Exception{}
class ConfirmBothNewPassword extends Exception{}
class OldPwordCOnfirmError extends Exception{}
class BothPwordCOnfirmError extends Exception{}
class ChangePasswordController extends Controller
{
    //


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function ChangePassword(Request $request){

        if($request->method() == "POST")
        {
            try{

                $input = $request->all();
                $old_pword  =  $input['old-password'];
                $new_pword_1 =  $input["new_password1"];
                $new_pword_2 =  $input["new_password2"];

                $hashold_password_input_by_user = bcrypt($new_pword_1);
                $hashed = Auth::user()->password;

                //$new_pword_1 = response()->json( $input["new_password1"]);
                if($old_pword == ''){
                    throw new Empty1();
                }else if($new_pword_1 == ''){
                    throw new Empty2();
                }else if($new_pword_2 == ''){
                    throw new Empty3();
                }else if($new_pword_1 != $new_pword_2){
                    throw new BothPwordCOnfirmError();
                }else if(Hash::check($old_pword, $hashed) === false){
                    throw new OldPwordCOnfirmError();
                }else{
                    $password = User::findOrFail(Auth::user()->id);
                    $password->update(['password' => $hashold_password_input_by_user]);
                    $password->save();
                    return response()->json(['success'=>'Password Changed Successfully']);
                }

            }catch (Empty1 $exception){
                return response()->json(['errors'=>'Sorry The Old Password Field Can not be Empty']);
            }catch (Empty2 $exception){
                return response()->json(['errors'=>'Sorry The New Password Field Can not be empty']);
            }catch (Empty3 $exception){
                return response()->json(['errors'=>'Sorry The Confirm Password Field Can not be empty']);
            }catch (BothPwordCOnfirmError $exception){
                return response()->json(['errors'=>'New and Confirm Password Field Mis-Matched']);
            }catch (OldPwordCOnfirmError $exception){
                return response()->json(['errors'=>'Old Password entered does not match any of our records']);
            }
        }
        else
        {

            return redirect('account/edit-profile');

        }

    }


}
