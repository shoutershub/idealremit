@extends('layouts.loggedin.fullwidth')

@section('content')
    <div class="intro-heading-left text-left">
        <h2>Select Payment Method </h2>
    </div>

    <div class="select-option-payment">

        <p class="alert alert-secondary">
            Please pick a payment method sutable to you and the reciever.
        </p>

        <div class="togglable">
            <div class="selectable-element img-responsive-2 relative">
                <img src="assets/img/2000px-PayPal_logo.svg.png">
                <i class="fa fa-angle-right"></i>
            </div>

            <form action="" method="post">
                <div class="payments-initals">

                    <div class="send-payment-initials">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Destination account number" class="input-filed-payable">
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Destination account name" class="input-filed-payable">
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Destination bank name" class="input-filed-payable"></div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Destination phone number" class="input-filed-payable">
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Destination phone number" class="input-filed-payable">
                            </div>
                            <div class="col-md-6">
                                <select id="country" name ="country" class="input-filed-payable"></select>
                            </div>
                            <div class="col-md-6">
                                <select name ="state" id ="state" class="input-filed-payable"></select>
                            </div>

                            <div class="col-md-12">
                                <div class="secure-note-alert">
                                    <b>Note:</b> See the <a href="#">Terms of Service</a> - Why we Keep this Record. <br/>
                                    Please note: all Information entered above is encrpted and secure.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <input class="btn btn-defualt btn-block" type="submit" value="Contine to Payment" id="continue-stage1">
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
