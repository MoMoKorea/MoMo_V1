<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="_token" name="_token" content="{{ csrf_token() }}">
    <title>MOMO</title>

    <!-- custom -->
    <link href="{{ elixir('/css/momo_custom_style.css')}}" rel="stylesheet">
    <link href="/css/momo_fonts.css" rel="stylesheet">
    <link href="{{ elixir('/css/momo_style.css') }}" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">

    <!-- JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="/js/momo.config.js"></script>

    <script src="/js/rateyo.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script src="https://unpkg.com/vue@2.1.8/dist/vue.js"></script>

</head>

<!-- header 오랜지 -->

<div class="header_orange">
    <div class="position_r">

        <!-- 햄버거 -->

        <a class="header_p" href="#">
            <div class="header_meun">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </a>

        <!-- 타이틀_text -->

        {{--<h4 class="header_title">예약 내역</h4>--}}


        <!-- 타이틀_logo -->

        <h4 class="header_logo">
            <img title="logo" src="/img/logo_w.png">
        </h4>
    </div>
</div>


<!-- header 화이트 -->

<div class="header_white">
    <div class="position_r">

        <!-- 뒤로가기 -->

        <a class="header_3" href="#">
            <div class="header_back">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
        </a>


        <!-- 타이틀_logo -->

        <h4 class="header_logo">
            <img title="logo" src="../img/logo_3.png">
        </h4>
    </div>
</div>


<body>
    @yield('content')
</body>
</html>