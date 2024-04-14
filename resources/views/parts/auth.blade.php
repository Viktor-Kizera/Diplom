<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization | MoviMag</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/authorization.css">
    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper wrapper-authorization">

    @yield('content')


</div>
<script src="/js/main.js"></script>
<script src="/js/jquery/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('.block__btn-login-and-reg .reg').click(function(){
            if($('.block__login').hasClass('active')) {
                $('.block__reg').addClass('active'),
                    $('.block__login').removeClass('active'),
                    $(this).toggleClass('active'),
                    $('.block__btn-login-and-reg .login').removeClass('active')
            } else {

            }
        })
    });
    $(document).ready(function(){
        $('.block__btn-login-and-reg .login').click(function(){
            if($('.block__reg').hasClass('active')) {
                $('.block__login').addClass('active'),
                    $('.block__reg').removeClass('active')
                $(this).toggleClass('active'),
                    $('.block__btn-login-and-reg .reg').removeClass('active')
            } else {

            }
        })
    });

    $(document).ready(function(){
        $('.bnt__password').click(function() {
            $(this).toggleClass('active');
        })
    });
    $( document ).ready(function() {
        $('#s-h-pass').click(function(){
            var type = $('#password').attr('type') == "text" ? "password" : 'text';
            $('#password').prop('type', type);
        });
    });
</script>
</body>
</html>
