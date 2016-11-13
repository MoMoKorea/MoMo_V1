@extends('mobile.header')

@section('content')

<div class="position_r">
    <div class="detail_top" style="background-image: url('/img/detail/detail_top_ex01.png')"></div>

    <div class="detail_top_black"></div>

    <div class="detail_top_seller position_r">
        <img class="shadow_box" title="판매자ID" src="../img/detail/detail_seller_ex01.png">
    </div>
</div>

<div class="text_c detail_seller_title">
    <h3><b>최희&nbsp;님</b></h3>
    <h5 class="color_8">51세</h5>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="mar_15 detail_seller_text">
                정리정돈 잘하고 깔끔하며, 집반찬을 맛있게 합니다.<br/>
                YMCA 베이비시터 교육이수 후 9년여동안 베이비시터로 일한경험이 있습니다
            </div>
        </div>

        <div class="col-xs-12">
            <div class="mar_15 shadow_box detail_seller_info">
                <div class="row">
                    <div class="col-xs-6">
                        <div><b>거주지역</b></div>

                        <div class="mar_5 color_8">마포구 성산시</div>
                    </div>

                    <div class="col-xs-6">
                        <div><b>경력</b></div>

                        <div class="mar_5 color_8">2년차</div>
                    </div>
                </div>

                <div class="row mar_15">
                    <div class="col-xs-6">
                        <div><b>일의형태</b></div>

                        <div class="mar_5 color_8">자택, 출장</div>
                    </div>

                    <div class="col-xs-6">
                        <div><b>가족</b></div>

                        <div class="mar_5 color_8">1남 2녀</div>
                    </div>
                </div>

                <div class="row mar_15">
                    <div class="col-xs-12">
                        <div><b>근무요일</b></div>

                        <div><!-- 아직 디자인못함 이후 업데이트예정 --></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xs-12 mar_15">
            <!-- 일단 iframe 으로 넣어놈 -->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.1580163031963!2d126.9385588506632!3d37.55134073265732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9914ca252349%3A0x715875d4af1d5974!2z7ISc6rCV64yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1478425913813" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="mar_30"><b>모모님 리뷰</b></div>

            <div class="mar_15 text_c">
                <div style="margin-bottom: 5px; line-height: 0px; color: #FFE200; font-size: 24px;">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" style="color: #ccc;" aria-hidden="true"></i>
                </div>

                <div class="color_8">13개의 리뷰</div>
            </div>

            <div class="shadow_box mar_15" style="-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">
                <div class="position_r" style="padding: 10px; background-color: #F1F1F1; border-bottom: solid #e5e5e5 1px;">
                    <div style="position: absolute; top: 0px; left: 0px;">
                        <img style="width: 30px; border: solid #E5E5E5 1px;" title="판매자ID" src="../img/detail/detail_seller_ex01.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop