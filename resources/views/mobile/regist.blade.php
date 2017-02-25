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
                <div class="position_r mar_50">
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

                <div class="position_r mar_80">
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

                <div class="position_r mar_80">
                    <h2 class="font_t color_p regist_square">03</h2>

                    <div class="regist_title">
                        <h3 class="color_p">주소</h3>
                        <h5 class="color_8 mar_5">주소를 입력해주세요</h5>
                    </div>

                    <div class="regist_contents">
                        <input type="text" class="form-control" placeholder="ex) 서울특별시 마포구 신수동 1-1">
                    </div>
                </div>

                <div class="position_r mar_80">
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

                <div class="position_r mar_80">
                    <h2 class="font_t color_p regist_square">05</h2>

                    <div class="regist_title">
                        <h3 class="color_p">근무 요일</h3>
                        <h5 class="color_8 mar_5">희망근무요일을 알려주세요</h5>
                    </div>

                    <div class="regist_contents">
                        <div class="position_r">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    월
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    화
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    수
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    목
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    금
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    토
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    일
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="position_r mar_80">
                    <h2 class="font_t color_p regist_square">06</h2>

                    <div class="regist_title">
                        <h3 class="color_p">희망 시급</h3>
                        <h5 class="color_8 mar_5">원하시는 시급에 대해서 알려주세요</h5>
                    </div>

                    <div class="regist_contents">
                        <div class="position_r">
                            <div class="regist_money">
                                <input type="number" class="form-control" placeholder="ex) 10000">
                            </div>

                            <h5 class="regist_money_text">원</h5>

                            <div class="checkbox mar_15">
                                <label>
                                    <input type="checkbox" value="">
                                    합의희망
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="position_r mar_80">
                    <h2 class="font_t color_p regist_square">07</h2>

                    <div class="regist_title">
                        <h3 class="color_p">자기소개</h3>
                        <h5 class="color_8 mar_5">육아에 대한 어머님의 생각을 간략하게 표현해주세요!</h5>
                    </div>

                    <div class="regist_contents">
                        <div class="position_r regist_320">
                            <textarea placeholder="아이어머니에게 전달될 예정이에요. 3~4문장 정도 부탁드립니다." class="form-control" rows="5"></textarea>

                        </div>
                    </div>
                </div>

                <div class="position_r mar_80">
                    <h2 class="font_t color_p regist_square">08</h2>

                    <div class="regist_title">
                        <h3 class="color_p">학력사항</h3>
                        <h5 class="color_8 mar_5">밝히고 싶지 않으시면 "비공개"를 선택해주세요</h5>
                    </div>

                    <div class="regist_contents">
                        <div class="position_r regist_320">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios0" value="option0">
                                    비공개
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                    중졸
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    고졸
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                    대졸
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                                    대학원졸
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
                                    기타
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <!-- 활성화는 bottom_btn_p, 비활성화는 bottom_btn_c -->

            <Button class="mar_50 bottom_btn_p" >
                <h4 class="text_c">
                    <b>등록완료</b>
                </h4>
            </Button>
        </div>
    </div>

@stop