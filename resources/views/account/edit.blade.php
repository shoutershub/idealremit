@extends('layouts.loggedin.defualt')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
@endsection

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

        <form action="/account/edit-profile" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            @foreach($user_info as $user)

            <div class="profile-settings-inner">
                <div class="row">
                    <div class="col-md-12 edit-profile-image-reloaded">

                        <div class="edit-profile-image-inner img-is-responsive-2">
                            <img src="{{url('img/medium-default-avatar.png')}}">
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

                                @else
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            @endif
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Phone No.</label>
                        <input type="text" value=" {{$user->phone}}" class="form-control" name="phone">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Address Line 1</label>
                        <input type="text" value="{{$user->address->Address_1}}" class="form-control" name="address1">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Address Line 2</label>
                        <input type="text" value="{{$user->address->Address_2}}" class="form-control" name="address2">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Address Line 3</label>
                        <input type="text" value="{{$user->address->Address_3}}" class="form-control" name="address3">
                    </div>

                </div>

                {{--<h5> Bank Details </h5>--}}
{{--
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" value="{{ bank_info_decyptor(decrypt($user->bankinformation->account_name))}}" class="form-control" name="accountname">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="{{$user->bankinformation->account_number}}" class="form-control" name="accountnumber">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="{{$user->bankinformation->bank_country}}" class="form-control" name="countrybank">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="{{$user->bankinformation->bank_swift_code}}" class="form-control" name="bankswiftcode">
                    </div>
                    <div class="col-md-12 moreinfo"><p>Why do we collect this informations ? <a href="#">Read Here</a></p> </div>

                </div>--}}
                <div class="col-md-12">
                    <input class="btn btn-defualt btn-block" value="Edit Profile" type="submit">
                </div>
            </div>

            @endforeach

        </form>
        <br/>
        <hr/>
        <p>More Edit Options</p>
        <div class="more-options-pannel"></div>
        <button class="custom-btn" id="custom-html-alert">Change Password</button> <br>
        <button class="custom-btn" id="custom-html-alert2">Change Bank Information</button>
    </div>
    </div>
@endsection

@section('scripts')
<script src="{{asset('js/bootstrap-filestyle.min.js')}}"></script>
<script src="{{asset('js/sweetalert2.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>

<script>


    $('.header-handle-toggle.relative').on('click', function(){
        $('.change-pword-filed').slideToggle('slow');
    });

    //Change Bank Info
    $("#custom-html-alert").click(function(e) {
        e.preventDefault();
        var btn = "button";
        swal({
            title: "<p>Change Password</p>",
            html: '<p class="alert alert-danger" style="display:none"></p> <p class="alert alert-success" style="display:none"></p>' +
            '</br><form id="c-pword" action="{{url('/account/change-password')}}" method="post"><div class="change-acct-pword">  <input type="hidden" name="_token" value="{{ Session::token() }}">' + ' <div class="col-md-12">\n' +
            '<div class="password_sent_status"></div> <input type="password" placeholder="Old Password" class="form-control" name="old-password" id="old_password">\n' +
            '</div> ' +
            '<div class="col-md-12">\n' +
            '<input  type="password" placeholder="New Password" class="form-control" name="new_password1" id="new_password_1">\n' +
            '</div> ' + '\n' +
            '<div class="col-md-12">\n' +
            '<input type="password" placeholder="New Password Again" class="form-control" name="new_password2" id="new_password_2">\n' +
            '</div>' + '<button type="submit" class="custom-btn" id="change-acct-pword">Change Password</button>'  +
            '</div></form>',
            showConfirmButton: false,
            showCloseButton: true,
        });
    });

    //Change bank info.
    $("#custom-html-alert2").click(function(e) {
        e.preventDefault();
        var btn = "button";
        swal({
            title: "<p>Bank Account Information</p>",
            html: '<p class="alert alert-danger" style="display:none"></p> <p class="alert alert-success" style="display:none"></p>' +
            '<p>Your Current bank Account number is : *****889844 </p> \n' +
            '<form id="b_info" method="post"><div class="change-acct-pword"> \n' +
            '<div class="col-md-12">\n' +
            '<div class="account_info_inner">\n' +
            '<div class="row">\n' +
            '<input type="hidden" name="_token" value="{{ Session::token() }}">' +
            '<div class="col-md-6"><input type="text" value="" class="form-control" name="accountname" placeholder="Account name" type="text"></div>\n' +
            '<div class="col-md-6">\n' +
            '<input type="text" value="" class="form-control" name="accountnumber" placeholder="Account number">\n' +
            '</div> ' + '\n' +
            '<div class="col-md-6">\n' +
            '<input type="text" value="" class="form-control" name="countrybank" placeholder="Bank Country">\n' +
            '</div> ' + '\n' +
            '<div class="col-md-6">\n' +
            '<input type="text" value="" class="form-control" name="bankswiftcode" placeholder="Bank Swift Code">\n' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<button type="submit" class="custom-btn" id="change-acct-b-info">Change Password</button>\n' +
            '</form>',
            showConfirmButton: false,
            showCloseButton: true,
        });
    });

    $(document).on('submit', "#c-pword", function(event) {

        event.preventDefault();
        var token = $('#the_token').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            dataType: "json",
            data: $('#c-pword').serialize(),
            url: "{{route('change-password')}}",
            success: function(data){
                if(data.errors) {
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').html(data.errors);
                        jQuery('.alert-danger').effect( "shake" );
                } else{
                    jQuery('.alert-danger').hide();
                    jQuery('#c-pword').hide();
                    jQuery('.alert-success').show();
                    jQuery('.alert-success').html(data.success);

                    jQuery('.alert-success').effect('bounce');
                }
            }
        });

    });

 $(document).on('submit', "#b_info", function(event) {

        event.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            dataType: "json",
            data: $('#b_info').serialize(),
            url: "{{route('change-bank-info')}}",
            success: function(data){
                if(data.errors) {
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').html(data.errors);
                        jQuery('.alert-danger').effect( "shake" );
                } else{
                    jQuery('.alert-danger').hide();
                    jQuery('#c-pword').hide();
                    jQuery('.alert-success').show();
                    jQuery('.alert-success').html(data.success);

                    jQuery('.alert-success').effect('bounce');
                }
            }
        });

    });

</script>

    @endsection
