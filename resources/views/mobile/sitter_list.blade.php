@extends('mobile.header')

@section('content')

    <style>
        .header_white{
            display: none;
        }
    </style>

    <div class="global_body">
        <div class="position_r">
            <!-- map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.1580163031963!2d126.9385588506632!3d37.55134073265732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9914ca252349%3A0x715875d4af1d5974!2z7ISc6rCV64yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1478425913813" width="100%" height="418" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="slist_bottom">
            <div class="position_r">
                <h4 class="slist_location">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>서울특별시 마포구
                </h4>

                <div class="slist_location_btn">
                    <a class="btn btn-default" href="#" role="button">지역변경</a>
                </div>
            </div>

            {{--<div class="slist_body">--}}

                {{--<!-- 컨텐츠_01 -->--}}

                {{--<div class="inline_b position_r shadow_box text_c slist_list">--}}
                    {{--<a class="color_3" href="../detail">--}}
                        {{--<div class="slist_list_img">--}}
                            {{--<img class="shadow_box" title="판매자ID" src="../img/detail/detail_seller_ex01.png">--}}
                        {{--</div>--}}

                        {{--<div class="slist_list_box">--}}
                            {{--<h5><b>최희&nbsp;님</b></h5>--}}

                            {{--<div class="slist_list_star">--}}
                                {{--<div id="list_rate01"></div>--}}
                            {{--</div>--}}

                            {{--<h6 class="mar_10 color_8">51세&nbsp;/&nbsp;2년차</h6>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<!-- 컨텐츠_02 -->--}}

                {{--<div class="inline_b position_r shadow_box text_c slist_list">--}}
                    {{--<a class="color_3" href="../detail">--}}
                        {{--<div class="slist_list_img">--}}
                            {{--<img class="shadow_box" title="판매자ID" src="../img/detail/detail_seller_ex02.png">--}}
                        {{--</div>--}}

                        {{--<div class="slist_list_box">--}}
                            {{--<h5><b>마포맘&nbsp;님</b></h5>--}}

                            {{--<div class="slist_list_star">--}}
                                {{--<div id="list_rate02"></div>--}}
                            {{--</div>--}}

                            {{--<h6 class="mar_10 color_8">62세&nbsp;/&nbsp;8년차</h6>--}}
                        {{--</div>--}}
                    {{--</a>--}}

                {{--</div>--}}

                {{--<!-- 컨텐츠_03 -->--}}

                {{--<div class="inline_b position_r shadow_box text_c slist_list">--}}
                    {{--<a class="color_3" href="../detail">--}}
                        {{--<div class="slist_list_img">--}}
                            {{--<img class="shadow_box" title="판매자ID" src="../img/detail/detail_seller_ex01.png">--}}
                        {{--</div>--}}

                        {{--<div class="slist_list_box">--}}
                            {{--<h5><b>서강대맘&nbsp;님</b></h5>--}}

                            {{--<div class="slist_list_star">--}}
                                {{--<div id="list_rate03"></div>--}}
                            {{--</div>--}}

                            {{--<h6 class="mar_10 color_8">31세&nbsp;/&nbsp;1년차</h6>--}}
                        {{--</div>--}}
                    {{--</a>--}}

                {{--</div>--}}


            {{--</div>--}}

            <!-- empty -->

            <div class="text_c slist_list_empty">
            <img title="판매자ID" src="/img/sitter_list/sitter_list_empty.png">

            <h4 class="font_t mar_15">모모님을 찾을 수가 없어요</h4>

            <h5 class="mar_10">
            <a href="#">다른지역으로 변경하기</a>
            </h5>
            </div>
        </div>

    </div>

    <script>

        $(document).ready(function () {

            $("#list_rate01").rateYo({
                rating: 4.5,
                starWidth: "17px",
                ratedFill: "#ffe200",
                normalFill: "#cccccc",
                readOnly: true
            });

            $("#list_rate02").rateYo({
                rating: 4.0,
                starWidth: "17px",
                ratedFill: "#ffe200",
                normalFill: "#cccccc",
                readOnly: true
            });

            $("#list_rate03").rateYo({
                rating: 3.5,
                starWidth: "17px",
                ratedFill: "#ffe200",
                normalFill: "#cccccc",
                readOnly: true
            });

        })

    </script>


@stop