@extends('mobile.header')

@section('content')
    <style>
        body{
            background: -webkit-gradient(linear, left top, left bottom, from(#43cea2), to(#185a9d)) fixed;
            background: -o-linear-gradient(linear, left top, left bottom, from(#43cea2), to(#185a9d)) fixed;
            background: -moz-linear-gradient(linear, left top, left bottom, from(#43cea2), to(#185a9d)) fixed;
            background: linear-gradient(linear, left top, left bottom, from(#43cea2), to(#185a9d)) fixed;
        }

        .header_orange{
            display: none;
        }

    </style>

    <div class="signup_body">
        <div class="signup_logo text_c">
            <img title="logo" src="../img/logo_w.png">

            <div class="signup_input">
                <div class="position_r mar_30">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="email" name="email" placeholder="이메일">
                </div>

                <div class="position_r mar_15">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="password" placeholder="비밀번호">
                </div>
            </div>

            <div class="signup_checkbox text_l">
                <div class="checkbox">
                    <div>
                        <label>
                            <input type="checkbox" id="123" value="option1" aria-label="..."><a class="color_w" target="_blank" href="#">이용약관</a>&nbsp;에&nbsp;동의
                        </label>
                    </div>

                    <div class="mar_5">
                        <label>
                            <input type="checkbox" id="456" value="option1" aria-label="..."><a class="color_w" target="_blank" href="#">개인정보 수집 및 이용</a>&nbsp;에&nbsp;동의
                        </label>
                    </div>
                </div>
            </div>

        </div>

        <!-- 활성화는 bottom_btn_f, 비활성화는 bottom_btn_signup -->

        <a id="loginBtn" href="javascript:void(0);false;">
            <h4 class="text_c bottom_btn bottom_btn_signup">
                <b>로그인</b>
            </h4>
        </a>

    </div>




@stop

