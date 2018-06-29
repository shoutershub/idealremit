<html>
<head>
    <title>Ajax Example</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>


</head>

<body>
<div id = 'msg'>This message will be replaced using Ajax.
    Click the button to replace the message.</div>
<button onClick='getMessage()'> replace text</button>

<script>
    function getMessage(){
        $.ajax({
            type:'POST',
            url:'/getmsg',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:'something',
            success:function(data){
                $("#msg").html(data.msg);
            }
        });
    }
</script>
</body>

</html>