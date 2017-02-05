@extends('mobile.header')

@section('content')
<style>
    .header_orange{
        display: none;
    }
</style>

<div class="global_body">
    <div class="position_r">
        <div class="detail_top" style="background-image: url('/img/detail/detail_top_ex01.png')"></div>

        <div class="detail_top_black"></div>

    <div class="detail_top_seller position_r">
        <img class="shadow_box" title="판매자ID" src="/img/detail/detail_seller_ex01.png">
    </div>
</div>

<div class="text_c detail_seller_title">
    <h3><b>{{ $sitter->username }}&nbsp;님</b></h3>
    <h5 class="color_8">{{ $sitter->age }}세</h5>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="mar_15 detail_seller_text">
                {{ $sitter->description }}
            </div>
        </div>

        <div class="col-xs-12">
            <div class="mar_15 shadow_box detail_seller_info">
                <div class="row">
                    <div class="col-xs-6">
                        <div><b>거주지역</b></div>

                        <div class="mar_5 color_8">{{ $sitter->addr }}</div>
                    </div>

                        <div class="col-xs-6">
                            <div><b>경력</b></div>

                        <div class="mar_5 color_8">{{$sitter->career}}년차</div>
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
                        <div><b>희망 근무요일</b></div>

                        <div class="mar_5 color_8 position_r">
                            <div class="inline_b detail_seller_date_w">월</div>

                            <div class="inline_b detail_seller_date_w">화</div>

                            <div class="inline_b detail_seller_date_p">수</div>

                            <div class="inline_b detail_seller_date_p">목</div>

                            <div class="inline_b detail_seller_date_p">금</div>

                            <div class="inline_b detail_seller_date_p">토</div>

                            <div class="inline_b detail_seller_date_p">일</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-xs-12 mar_15">
            <img class="detail_map_width" src="{{ $sitter->addrImgUrl }}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="mar_30"><b>모모님 리뷰</b></div>

            <div class="mar_15 text_c">
                <div class="detail_review_star">

                    <!-- 별은 하단에 스크립트 -->
                    <div id="review_main"></div>
                </div>

                <div class="color_8">13개의 리뷰</div>
            </div>

            <div class="shadow_box mar_15 detail_review_body">
                <div class="position_r detail_review_buyer">
                    <div class="detail_review_img">
                        <img title="구매자ID" src="../img/detail/detail_seller_ex02.png">
                    </div>

                    <h6 class="color_8 detail_review_date">
                        16.06.19 18:00
                    </h6>

                    <h6 class="color_8 detail_review_right">
                        <!-- 별은 하단에 스크립트 -->

                        <div id="review_01"></div>
                    </h6>

                    <div class="detail_review_text">
                        오늘 개인적인 용무가 길어져서 마음이 너무 불편했었는데, 모모님이 연장 근무하시게 되었는데도 흔쾌히 받아주셔서 감사합니다
                    </div>
                </div>

                <div class="position_r detail_review_seller">
                    <div class="detail_review_img">
                        <img title="판매자ID" src="/img/detail/detail_seller_ex01.png">
                    </div>

                    <h6 class="color_8 detail_review_right">
                        최희 님
                    </h6>

                    <div class="detail_review_text">
                        도착시간까지 잘 이야기 해주셔서 큰 지장없었어요 다음에도 연락주세요 :)
                    </div>

                </div>
            </div>
        </div>
    </div>


    </div>


    <div class="mar_50"></div>

    <!-- 하단 버튼 -->

    <Button type="button" data-toggle="modal" data-target="#contact">
        <h4 class="text_c bottom_btn bottom_btn_p">
            <b>시터에게 연락하기</b>
        </h4>
    </Button>

</div>


<!-- Modal -->
<div class="row">
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog detail_modal" role="document">
            <div class="modal-content">
                <div class="modal-body text_c">
                    <div class="position_r detail_modal_img">
                        <img class="shadow_box" title="판매자ID" src="../img/detail/detail_seller_ex01.png">
                    </div>

                    <h3>
                        최희 님에게 연락
                    </h3>

                    <div class="color_8 mar_15">
                        <button class="btn btn-block btn-lg btn-primary" type="submit"><i class="fa fa-phone" aria-hidden="true"></i>전화하기</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<script>

    $(document).ready(function () {

        $("#review_main").rateYo({
            rating: 4.5,
            starWidth: "28px",
            ratedFill: "#ffe200",
            normalFill: "#cccccc",
            readOnly: true
        });

        $("#review_01").rateYo({
            rating: 4.5,
            starWidth: "11px",
            ratedFill: "#ffe200",
            normalFill: "#cccccc",
            readOnly: true
        });

    })

</script>
@stop