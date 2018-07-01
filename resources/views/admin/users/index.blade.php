@extends('layouts.loggedin.fullwidth')
@section('styles')
    <link href="{{url('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@stop

@section('content')
    @if(session()->has('profile_updated_successfully'))
        <div class="alert alert-info">
            {!! session()->get('profile_updated_successfully') !!}
        </div>
    @endif

    <table id="datatable" class="table table-striped table-hover">
        <thead>
        <tr>
            <th> Id</th>
            <th> Photo</th>
            <th> First name</th>
            <th> Last name </th>
            <th> Email </th>
            <th> Country </th>
            <th> Phone </th>
            <th> Status </th>
            <th> Action </th>
        </tr>
        </thead>
        <tbody>
            @if($users)
            @foreach($users as $user)

                <tr>
                <td>{{$user->id}}</td>
                <td class="user-profile-image"><img src="{{$user->photo ? '/images/'.$user->photo->path: url('img/default-avatar.png')}}"></td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->country ? $user->country->name: 'No Data Entered'}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->verified == 1 ? 'Verified' : 'Not Verified'}}</td>
                <td> <a href="{{route('users.edit', $user->id)}}" class="btn default btn-xs green-stripe"><button class="paypent-status pending">Edit</button> </a>
                </tr>
            @endforeach
            @endif
           {{-- <td class="relative"> Oziri emeka emmanuel
                <div class="payment-view-more-info">
                    <a href="#"> view </a>
                    <a href="#"> edit </a>
                    <a href="#"> delete </a>
                </div>
            </td>--}}
           {{-- <td> Nigeria </td>
            </td>
--}}
        </tbody>
    </table>
@stop

@section('scripts')
    <script src="{{url('js/jquery.dataTables.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();

        } );
    </script>
@stop