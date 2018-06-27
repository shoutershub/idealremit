@extends('layouts.home.default')

@section('content')
    <div class="main-page-content">

        <div class="container">

            @include('layouts.partials._notifications')

            <div class="intro-heading-left text-left">
                <h2>Login </h2>
            </div>

            <div class="row">

                <div class="col-md-8 col-sm-12 col-md-offset-2">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn bt-green">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
            </div>


            <div class="col-md-4 d-none d-md-block d-lg-block col-md-offset-2">
                    <div class="registration-tips">
                        <div class="registration-tips cards box-shadow">
                            <h6><i class="far fa-lightbulb text-left"></i> General Tips</h6>
                            <div class="reg-hint">
                                <ul>
                                    <li><i class="fa fa-angle-right"></i> To Login, Email and Password Field Must be Entered.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>


            </div>
        </div>
    </div>
@endsection

