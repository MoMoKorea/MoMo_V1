@extends('mobile.header')

@section('content')

    <style>
        .header_orange{
            display: none;
        }

        .header_white{
            display: none;
        }

        /*body{*/
            /*background-color: #FEF5EE;*/
        /*}*/

    </style>

    <div>
        <img title="regist_top" src="/img/regist/regist_title.png">
    </div>


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="position_r mar_30">
                    <h2 class="font_t color_p regist_square">01</h2>

                    <div class="regist_title">
                        <h3 class="color_p">사진등록</h3>
                        <h5 class="color_8 mar_5">사진을 올려주세요</h5>
                    </div>

                    <div class="regist_contents regist_imgupload">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>사진 선택하기
                        </button>
                    </div>
                </div>

                <div class="position_r mar_30">
                    <h2 class="font_t color_p regist_square">02</h2>

                    <div class="regist_title">
                        <h3 class="color_p">기본사항</h3>
                        <h5 class="color_8 mar_5">아래의 사항을 입력해주세요</h5>
                    </div>

                    <div class="regist_contents">
                        <div class="position_r regist_sub">
                            <h5>이름</h5>

                            <div>
                                <input type="text" class="form-control" placeholder="성함을 적어주세요">
                            </div>
                        </div>

                        <div class="position_r mar_10 regist_sub">
                            <h5>나이</h5>

                            <div>
                                <input type="text" class="form-control" placeholder="정확한 숫자로, 한글 입력 X">
                            </div>
                        </div>

                        <div class="position_r mar_10 regist_sub">
                            <h5>전화번호</h5>

                            <div>
                                <input type="text" class="form-control" placeholder="전화번호를 입력해주세요">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="position_r mar_30">
                    <h2 class="font_t color_p regist_square">03</h2>

                    <div class="regist_title">
                        <h3 class="color_p">주소</h3>
                        <h5 class="color_8 mar_5">주소를 입력해주세요</h5>
                    </div>

                    <div class="regist_contents">
                        <input type="text" class="form-control" placeholder="ex) 서울특별시 마포구 신수동 1-1">
                    </div>
                </div>

                <div class="position_r mar_30">
                    <h2 class="font_t color_p regist_square">04</h2>

                    <div class="regist_title">
                        <h3 class="color_p">육아 경험</h3>
                        <h5 class="color_8 mar_5">몇 명의 육아 경험이 있으신가요</h5>
                    </div>

                    <div class="regist_contents">
                        <div class="position_r">
                            <div class="regist_num">
                                <input type="number" class="form-control" placeholder="1">
                            </div>

                            <h5 class="regist_num_text">명</h5>
                        </div>
                    </div>
                </div>



                <div class="mar_50"></div>
            </div>
        </div>
    </div>

@stop