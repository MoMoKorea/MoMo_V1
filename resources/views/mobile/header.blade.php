<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>MOMO</title>

    <!-- Bootstrap -->

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap_edit.css" rel="stylesheet">

    <!-- custom -->

    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>

    <script src="js/rateyo.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


</head>

<!-- header_orange -->

<div class="header_orange">
    <div class="position_r">

        <!-- 햄버거 -->

        <a class="header_a" href="#">
            <div class="header_meun">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </a>

        <!-- 타이틀_text -->

        {{--<h4 class="header_title">예약 내역</h4>--}}


        <!-- 타이틀_logo -->

        <h4 class="header_logo">
            <img title="logo" src="../img/logo_w.png">
        </h4>
    </div>
</div>

<body>
    @yield('content')
</body>
</html>