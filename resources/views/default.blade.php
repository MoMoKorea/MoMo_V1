@extends('mobile.header')

@section('content')

    <div class="global_body">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div>
                        123123123
                    </div>


                </div>
            </div>
        </div>

    </div>


    <style>
        .signup_input{
            width: 70%;
            margin: 15px auto 0px auto;
        }

        .signup_input:first-child{
            width: 70%;
            margin: 30px auto 0px auto;
        }

        .signup_input .fa-envelope{
            position: absolute;
            top: 16px;
            left: 15px;
            color: #fff;
        }

        .signup_input .fa-lock{
            position: absolute;
            top: 17px;
            left: 18px;
            color: #fff;
        }

        .signup_input input{
            background-image: url("/img/login/signup_input.png");
            background-color: transparent;

            width: 100%;
            padding: 12px 0px 12px 40px;
            color: #fff;

            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
        }

        .signup_input input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: #FFD193;
        }
        .signup_input input::-moz-placeholder { /* Firefox 19+ */
            color: #FFD193;
        }
        .signup_input input:-ms-input-placeholder { /* IE 10+ */
            color: #FFD193;
        }
        .signup_input input:-moz-placeholder { /* Firefox 18- */
            color: #FFD193;
        }
    </style>
@stop