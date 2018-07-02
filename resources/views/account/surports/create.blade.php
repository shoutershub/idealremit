{{-- create.blade.php file--}}

@extends('layouts.loggedin.fullwidth')

{{--@section('title', 'Open Ticket')--}}

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-offset-4">
            <div class="surport-pannel">

                <div class="surport-panel-body">

                    <div class="col-md-12">
                        <div class="intro-heading-left text-left">
                            <h2>Open New Support Ticket </h2>
                        </div>
                    </div>

                    <div class="col-md-12"> @include('layouts.partials._notifications')</div>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/account/new-ticket') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-12 control-label">Title</label>

                            <div class="col-md-12">
                                <input id="title" type="text" class="surport-input form-control" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('support_type') ? ' support_type' : '' }}">
                            <label for="support_type" class="col-md-12 control-label">Category</label>

                            <div class="col-md-12">
                                <select id="support_type" type="support_type" class="surport-input form-control" name="support_type">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('support_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('support_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-12 control-label">Priority</label>

                            <div class="col-md-12">
                                <select id="priority" type="" class="surport-input form-control" name="priority">
                                    <option value="">Select Priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>

                                @if ($errors->has('priority'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-12 control-label">Message</label>

                            <div class="col-md-12">
                                <textarea rows="10" id="message" class="surport-input form-control" name="message"></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="custom-btn">
                                    <i class="fa fa-ticket-alt"></i> Open Ticket
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection