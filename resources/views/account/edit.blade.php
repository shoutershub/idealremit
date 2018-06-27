@extends('layouts.loggedin.defualt')

@section('content')
    <div class="profile-settings">
        <div class="intro-heading-left text-left">
            <h2>Edit Profile Information </h2>
        </div>

        <form action="">
            <div class="profile-settings-inner">
                <div class="row">
                    <div class="col-md-12 edit-profile-image-reloaded">
                        <div class="edit-profile-image-inner img-is-responsive-2">
                            <img src="{{url('img/medium-default-avatar.png')}}">
                        </div>
                        <div class="form-group">
                            <label>Select Profile Image</label>
                            <input type="file" class="filestyle" data-input="false" data-buttonname="btn-secondary">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">First Name</label>
                        <input type="text" value="First Name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Last Name</label>
                        <input type="text" value="Last Name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Email</label>
                        <input type="text" value="Email Name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Age</label>
                        <input type="date" value="Age" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Phone No.</label>
                        <input type="text" value="09098200893" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Address Line 1</label>
                        <input type="text" value="Extra Field" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Address Line 2</label>
                        <input type="text" value="Extra Field" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="first-name">Address Line 3</label>
                        <input type="text" value="Extra Field" class="form-control">
                    </div>
                    <div class="Toggle-change-password">
                        <div class="header-handle-toggle relative">
                            <h3>Change Password</h3>
                            <i class="fa fa-plus-circle"></i>
                        </div>
                        <div class="change-pword-filed">
                            <div class="change-pword-inner">
                                <div class="col-md-12">
                                    <input type="password" placeholder="Old Password" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <input type="password" placeholder="New Password" class="form-control">
                                </div>


                                <div class="col-md-12">
                                    <input type="password" placeholder="New Password Again" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h5> Bank Details </h5>

                <div class="row">
                    <div class="col-md-6">
                        <input type="text" value="Account Name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="Account Nnumber" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="Bank Country" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="text" value="Bank Swift Cide" class="form-control">
                    </div>
                    <div class="col-md-12 moreinfo"><p>Why do we collect this informations ? <a href="#">Read Here</a></p> </div>
                    <div class="col-md-12">
                        <input class="btn btn-defualt btn-block" value="Edit Profile" type="submit">
                    </div>
                </div>

            </div>
        </form>
    </div>
    </div>
@endsection

@section('scripts')
<script src="{{asset('js/bootstrap-filestyle.min.js')}}"></script>
<script>
    $('.header-handle-toggle.relative').on('click', function(){
        $('.change-pword-filed').slideToggle('slow');
    });
</script>
    @endsection
