@extends('layouts.home.default')

@section('content')
    <div class="main-page-content">

        <div class="container">

            @include('layouts.partials._notifications')

            <div class="intro-heading-left text-left">
                <h2>Reset Password</h2>
            </div>

            <div class="row">
                <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                         @endif
                                </div>

                            <div class="form-group">
                                        <button type="submit" class="btn bt-green">
                                            Send Password Reset Link
                                        </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
