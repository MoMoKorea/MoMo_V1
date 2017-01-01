@extends('mobile.header')

@section('content')
<style>
    body{
        background: -webkit-gradient(linear, left top, left bottom, from(#FCC351), to(#EF6B00)) fixed;
        background: -o-linear-gradient(linear, left top, left bottom, from(#FCC351), to(#EF6B00)) fixed;
        background: -moz-linear-gradient(linear, left top, left bottom, from(#FCC351), to(#EF6B00)) fixed;
        background: linear-gradient(linear, left top, left bottom, from(#FCC351), to(#EF6B00)) fixed;
    }
</style>

<div class="login_body">
    <div class="text_c login_logo">
        <img title="logo" src="../img/logo_w.png">

        {!! Form::open(['id' => 'loginForm']) !!}
            <div class="login_input">
                <div class="position_r mar_30">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="email" name="email" placeholder="이메일">
                </div>

                <div class="position_r mar_15">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="password" placeholder="비밀번호">
                </div>
            </div>
        {{ Form::close() }}

        <div class="login_justlogin">
            <a class="color_w a_under" href="#">
                이미 가입하셨나요?
            </a>
        </div>

    </div>

    <!-- 활성화는 bottom_btn_f, 비활성화는 bottom_btn_c -->

    <a id="loginBtn" href="javascript:void(0);false;">
        <h4 class="text_c bottom_btn bottom_btn_f">
            <b>로그인</b>
        </h4>
    </a>
</div>

<script>

    $(document).ready(function () {

        // 로그인 버튼 리스너
        setLoginClickListener();

    })

    function setLoginClickListener() {

        $('#loginBtn').click(function () {
            var dataForm = $('#loginForm').serialize();

            $.ajax({
                type: "POST",
                url: "login",
                dataType: "json",
                data: dataForm,
                success: function(response) {
                    if (response.meta.status == 1) {
                        location.href = response.meta.uri;
                    }

                }
            })


        })

    }

</script>
@stop

