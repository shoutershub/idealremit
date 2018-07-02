<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Support Ticket Information</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <style>
        body{
            font-family: 'work sans', sans-serif;
            color: #444;
        }

        .ideal-remit-header {
            text-align: center;
            padding: 20px;
            background: #1D976C;
            background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);
            background: linear-gradient(to right, #93F9B9, #1D976C);
        }

        .ideal-remit-mail-wrapper {
            margin: 50px 100px;
            border-radius: 10px;
            border: 1px solid #f2f2f2;
        }

        .ideal-remit-mail-inner {
            padding: 20px;
        }

        .ideal-remit-mail-inner button {
            border: 0;
            padding: 4px 20px;
            border-radius: 3px;
            background: #27ae60;
            font-weight: 700;
            text-transform: uppercase;
            color: #ffff;
        }

        hr.line {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        }

    </style>
</head>
<body>

<div class="ideal-remit-header">
    <img src="{{asset('img/idealremit-logo.png')}}" width="50px" alt="senders-remit-logo" width="30px" height="30px">
</div>


<div class="ideal-remit-mail-wrapper">
    <div class="ideal-remit-mail-inner">
        <p>
            Thank you <b>{{ ucfirst($user->name) }}</b> for contacting our support team. A support ticket has been opened for you. You will be notified when a response is made by email.<br> The details of your ticket are shown below:
        </p>

        <p>Title: <b>{{ $support->title }}</b></p>
        <p>Priority: <b style="color: #c0392b">{{ $support->priority }}</b></p>
        <p>Status: <button>{{ $support->status }}</button></p>

        <hr class="line">
        <p>
            You can view the ticket at any time at {{ url('supports/'. $support->surport_id) }}
        </p>
    </div>
</div>

</body>
</html>