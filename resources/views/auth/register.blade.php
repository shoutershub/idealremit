@extends('layouts.home.default')

@section('content')
    <div class="main-page-content">
        <div class="container">
            <div class="intro-heading-left text-left">
                <h2>Create an Account </h2>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12">

                    @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="ideal-remitregistration-from-inner">
                            <div class="row">
                                <div class="input-filed col-md-12">
                                    <input data-parsley-type="alphanum"  required type="text" placeholder="First Name" class="form-control" name="firstname" value="{{ old('firstname') }}">
                                </div>
                                <div class="input-filed col-md-12">
                                    <input data-parsley-type="alphanum" required  type="text" placeholder="Last Name" class="form-control" name="lastname" value="{{ old('lastname') }}">
                                </div>
                                <div class="input-filed col-md-12">
                                    <input parsley-type="email" required type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="input-filed col-md-12">
                                    <input type="text" required data-parsley-type="digits"  placeholder="Phone number" class="form-control" name="phone" value="{{ old('phone') }}">
                                </div>
                                <div class="input-filed col-md-12">
                                    <input type="password" required placeholder="Password" class="form-control" id="pass2" name="password">
                                </div>
                                <div class="input-filed col-md-12">
                                    <input type="password" required placeholder="Re-type Password" class="form-control"  data-parsley-equalto="#pass2" name="password_confirmation">
                                </div>
                                <div class="input-filed col-md-12">
                                    <select id="country" required name="country" class="form-control"  name="country" value="{{ old('country') }}"></select>
                                </div>
                                <div class="input-filed col-md-12">
                                    <div class="selected-state">
                                        <select name="state" required id ="state" class="form-control"  name="state" value="{{ old('state') }}"></select>
                                    </div>
                                </div>

                            </div>
                            <input class="btn btn-defualt btn-block" type="submit" value="Register">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 d-none d-md-block d-lg-block">
                    <div class="registration-tips">
                        <div class="registration-tips cards box-shadow">
                            <h6><i class="far fa-lightbulb text-left"></i> Registration Tips</h6>
                            <div class="reg-hint">
                                <ul>
                                    <li><i class="fa fa-angle-right"></i> You must Enter a First &amp; Lastname</li>
                                    <li><i class="fa fa-angle-right"></i> Password Must match </li>
                                    <li><i class="fa fa-angle-right"></i> Email address must be valid as confirmation Message would be sent to it after registration. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('js/countries.js') }}"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>

<script language="javascript">
    $(document).ready(function() {
        populateCountries("country", "state"); // first parameter is id of country drop-down and second 4
        //Parsely.js to valdiate form
        $('form').parsley();
    });
</script>

@endsection

