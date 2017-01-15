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

            {!! Form::open(['id' => 'signupForm']) !!}
            <div class="signup_input">
                <div class="position_r mar_30">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="email" id="email" name="email" placeholder="이메일">
                </div>

                <div class="position_r mar_15">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" id="password" name="password" placeholder="비밀번호">
                </div>
            </div>

            <div class="signup_checkbox text_l">
                <div class="checkbox">
                    <div>
                        <label>
                            <input type="checkbox" id="termsAgree" aria-label="...">
                                <a class="color_w" target="_blank" href="#">이용약관</a>
                                &nbsp;에&nbsp;동의
                        </label>
                    </div>

                    <div class="mar_5">
                        <label>
                            <input type="checkbox" id="privacyAgree" aria-label="...">
                            <a class="color_w" target="_blank" href="#">개인정보 수집 및 이용</a>
                            &nbsp;에&nbsp;동의
                        </label>
                    </div>
                </div>
            </div>

        </div>
        {{ Form::close() }}

        <!-- 활성화는 bottom_btn_f, 비활성화는 bottom_btn_signup -->

        <button id="signupButton" disabled="disabled">
            <h4 class="text_c bottom_btn bottom_btn_signup">
                <b>회원가입</b>
            </h4>
        </button>

    </div>


    <script>

        $(document).ready(function () {

            // 체크박스 체인지 리스너
            setCheckboxChangeListener();
            // 회원가입 체크
            setSignUpValidation();
        })

        function setCheckboxChangeListener() {

            var termsCheckBox = $("#termsAgree"),
                privacyCheckBox = $("#privacyAgree")
                ;

            $listener = function () {

                if(termsCheckBox.is(":checked")
                && privacyCheckBox.is(":checked"))
                {
                    $("#signupButton").removeAttr("disabled");
                    return;
                }

                $("#signupButton").attr("disabled", "disabled");
            };

            termsCheckBox.change($listener);
            privacyCheckBox.change($listener);
        }

        function setSignUpValidation() {

            $("#signupButton").click(function () {

                var emailInput = $("#email"),
                    passwordInput = $("#password"),
                    termsCheckBox = $("#termsAgree"),
                    privacyCheckBox = $("#privacyAgree")
                    ;

                if(emailInput.val() != ""
                && passwordInput.val() != ""
                && (termsCheckBox.is(":checked") && privacyCheckBox.is(":checked")))
                {
                    requestSignup();
                }

                else {
                    alert("회원가입 정보를 입력해주세요.")
                }
            })

        }

        function requestSignup() {

            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: $("#signupForm").serializeArray(),
                success: function (response) {
                    if (response.status == 1) {
                        location.href = response.data.uri;
                    }
                    else {
                        alert("회원가입에 실패했습니다.");
                    }
                }
            });
        }


    </script>



@stop

