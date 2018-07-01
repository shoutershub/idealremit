<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use App\UserPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class AdminUsersController extends Controller
{

    private $photos_path;

    public function __construct()
    {
        $this->photos_path = public_path('/images');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changepassword(Request $request){

        $rules = [
            'password'                 =>  'required',
        ];

        $messages = [
            'password.required'        =>  'This User Password Can not be Changed to Empty',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails())
        {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $input = $request->all();
            $user = User::findOrFail($input['status_number']);
            $user->update(['password' => bcrypt($input['password'])]);
            return redirect()->back()->with(Session::flash('password_changed', 'Users Password Changed Successfully'));
        }
    }
    public function store(Request $request)
    {
        //

        $input = $request->all();
        $user_id = $input['status_number'];
        $file = $request->file('file');

        $rules = [
            'email'                 =>  'unique:users,email,'.$user_id.'|required|email',
            'firstname'                 =>  'required',
            'lastname'                 =>  'required',
            'address1'                 =>  'required',
        ];

        $messages = [
            'email.required'        =>  'Your emails address is required.',
            'email.unique'          =>  'That email address is already in use.',
            'lastname.required'          =>  'User Last name is required.',
            'Address_1.required'          =>  'User First Address line can not be empty',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails())
        {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        } else{

        if(!$file == NULL) {
            if (UserPhoto::where('user_id', $user_id)->exists() === false) {
                if (!is_dir($this->photos_path)) {
                    mkdir($this->photos_path, 0777);
                }


                $name = sha1(date('YmdHis') . str_random(20));
                $resize_name = $name . str_random(16) . '-by-' . $input['firstname'] . $input['lastname'] . '.' . $file->getClientOriginalExtension();


                $create_photo = Image::make($file)
                    ->resize(100, 100, function ($constraints) {
                        $constraints->aspectRatio();
                    })
                    ->save($this->photos_path . '/' . $resize_name);


                if($create_photo){
                    (new UserPhoto)->create([
                        'path' => $resize_name,
                        'user_id' => $user_id,
                    ]);
                }

            } elseif(UserPhoto::where('user_id', $user_id)->exists()) {
                if(file_exists(public_path().'/images/'.User::findorFail($user_id)->photo->path)){
                    unlink(public_path().'/images/'.User::findorFail($user_id)->photo->path);
                }
                if (!is_dir($this->photos_path)) {
                    mkdir($this->photos_path, 0777);
                }


                $name = sha1(date('YmdHis') . str_random(20));
                $resize_name = $name . str_random(16) . '-by-' . $input['firstname'] . $input['lastname'] .'.'. $file->getClientOriginalExtension();


                $resize_update = Image::make($file)
                    ->resize(100, 100, function ($constraints) {
                        $constraints->aspectRatio();
                    })
                    ->save($this->photos_path . '/' . $resize_name);

                if($resize_update) {
                    UserPhoto::where('user_id', $user_id)->update([
                        'path' => $resize_name,
                    ]);
                }

            }
        }

        $users = User::findorFail($user_id);
        $users->update([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'sex' => $input['sex'],
            'verified' => $input['verified'],
            'is_admin' => $input['role'],
            'phone' => $input['phone'],
        ]);

        if(Address::where('user_id', $user_id)->exists() === false) {
            (new Address)->create([
                'Address_1' => $input['address1'],
                'Address_2' => $input['address2'],
                'Address_3' => $input['address3'],
                'user_id' => $user_id,
            ]);
        }elseif(Address::where('user_id', $user_id)->exists()) {
                Address::where('user_id', $user_id)->update([
                'Address_1' => $input['address1'],
                'Address_2' => $input['address2'],
                'Address_3' => $input['address3'],
                'user_id' => $user_id,
                ]);

            }

            if($users) {
                return redirect('/admin/users')->with(Session::flash('profile_updated_successfully', "User Profile with id: '{$user_id}' Email '{$users->email}' Updated Successfully "));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
