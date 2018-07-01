@extends('layouts.loggedin.fullwidth')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
@stop

@section('content')
    <div class="profile-settings">
        <div class="intro-heading-left text-left">
            <h2>Edit Profile Information </h2>
        </div>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-error">
                    {{$error}}
                </div>
            @endforeach
        @endif

        @include('layouts.partials._notifications')
            @if(session()->has('password_changed'))
                <div class="alert alert-info">
                    {!! session()->get('password_changed') !!}
                </div>
            @endif
        <form action="{{url('admin/users')}}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
                <div class="profile-settings-inner">
                    <div class="row">
                        <div class="col-md-12 edit-profile-image-reloaded">

                            <div class="edit-profile-image-inner img-is-responsive-2">
                                <img src="{{$user->photo ? '/images/'.$user->photo->path: url('img/default-avatar.png')}}">
                            </div>
                            <div class="form-group">
                                <label>Select Profile Image</label>
                                <input type="file" class="filestyle" data-input="false" data-buttonname="btn-secondary" name="file">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="first-name">First Name</label>
                            <input type="text" value="{{$user->firstname}}" class="form-control" name="firstname">
                        </div>
                        <div class="col-md-6">
                            <label for="first-name">Last Name</label>
                            <input type="text" value=" {{$user->lastname}}" class="form-control" name="lastname">
                        </div>
                        <div class="col-md-6">
                            <label for="first-name">Email</label>
                            <input type="text" value=" {{$user->email}}" class="form-control" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="first-name">Gender</label> <br/>
                            <select name="sex" class="form-control">
                                @if($user->sex)
                                    @if($user->sex == 'Male')
                                        <option value="{{$user->sex}}">{{$user->sex}}</option>
                                        <option value="Female">Change to: Female</option>
                                    @elseif($user->sex == 'Female')
                                        <option value="{{$user->sex}}">{{$user->sex}}</option>
                                        <option value="Male">Change to: Male</option>
                                    @endif
                                    @else
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                @endif
                            </select>
                        </div>

                        <hr/>
                        <div class="col-md-6">
                            <label for="first-name">Verification Status</label> <br/>
                            <select name="verified" class="form-control">
                                @if($user->verified == 1)
                                    <option value="{{$user->verified }}">{{$user->verified == 1 ? 'Verified': 'Unverified'}}</option>
                                    <option value="0">Change: To Unverified</option>
                                @else
                                    <option value="0">Unverified</option>
                                    <option value="1">Change: To Verified</option>
                                @endif
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="first-name">Role</label> <br/>
                            <select name="role" class="form-control">
                                @if($user->is_admin == 1)
                                    <option value="{{$user->is_admin }}">{{$user->is_admin == 1 ? 'Admin': 'User'}}</option>
                                    <option value="0">Change: To User</option>
                                @elseif($user->is_admin = 0)
                                    <option value="{{$user->is_admin }}">{{$user->is_admin == 1 ? 'Admin': 'User'}}</option>
                                    <option value="1">Change: To Admin</option>
                                @else
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                @endif
                            </select>
                        </div>



                        <div class="col-md-6">
                            <label for="first-name">Phone No.</label>
                            <input type="text" value=" {{$user->phone}}" class="form-control" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="first-name">Address Line 1</label>
                            <input type="text" value="{{$user->address ? $user->address->Address_1 : ''}}" class="form-control" name="address1">
                        </div>
                        <div class="col-md-6">
                            <label for="first-name">Address Line 2</label>
                            <input type="text" value="{{$user->address ? $user->address->Address_2 : ''}}" class="form-control" name="address2">
                        </div>
                        <div class="col-md-6">
                            <label for="first-name">Address Line 3</label>
                            <input type="text" value="{{$user->address ? $user->address->Address_3 : ''}}" class="form-control" name="address3">
                        </div>
                        <input type="hidden" value="{{$user->id}}" name="status_number">
                    </div>

                    <div class="empty-div-section">
                        <input class="btn btn-defualt btn-block" value="Edit Profile" type="submit">
                    </div>
                </div>
        </form>
        <button class="more-action">More <i class="fa fa-angle-down"></i> </button>
        <br/>
        <div class="edit-more-user-info">
            <form action="{{url('/admin/users/change-password')}}" method="POST">
                {{csrf_field()}}
                <div class="change-pword-section">
                    <input type="password" required placeholder="Change Account Password" class="form-control" name="password">
                    <input type="hidden" value="{{$user->id}}" name="status_number">
                    <button type="submit" class="custom-btn">Change Password</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/bootstrap-filestyle.min.js')}}"></script>
    <script>
        $('.edit-more-user-info').hide();
        $('.more-action').on('click', function () {
            $('.edit-more-user-info').slideToggle('slow');
        });
    </script>
@stop
