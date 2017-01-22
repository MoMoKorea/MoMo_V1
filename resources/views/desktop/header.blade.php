<!DOCTYPE html>
<html lang="ko">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="/css/momo_about_style.css"/>
    <link rel="stylesheet" href="/css/font-awesome.css"/>

    <div id="header-wrapper">
        <div id="header" class="container">

            <!-- 로고 -->
            <h1 id="logo"><a href="{{URL::to("about/main")}}">서비스 소개</a></h1>

            <!-- 네비게이션바 -->
            <nav id="nav">
                <ul>
                    <li><a href="{{URL::to("about/info")}}">상세소개</a></li>
                    <li><a href="{{URL::to("about/use")}}">이용방법</a></li>
                    <li class="break"><a href="{{URL::to("about/team")}}">팀원소개</a></li>
                    <li><a href="javascript:void(0);" class="sns">SNS</a></li>
                </ul>
            </nav>

            @yield('nav_header')

        </div>
    </div>
</head>

<body>
    @yield('content')
</body>


</html>