@extends('mobile.header')

@section('content')

    <style>
        .header_orange{
            display: none;
        }
    </style>

    <div id="location_div">
        <div>
            <img title="당신의 위치는 어디인가요?" src="../img/location/local_map.png">
        </div>

        <div class="mar_15">
            <h2 class="text_c font_t">당신의 위치는 어디인가요?</h2>

            <div class="container">

                <!-- 활성화는 btn-full-p, 비활성화는 btn-line-c -->

                <div class="row mar_30" >
                    <div class="col-xs-offset-1 col-xs-5 text_r">
                        <a class="btn btn-block btn-line-c" v-on:click="setLocationSelected(1)">
                            <h4 class="local_btn">강서구</h4>
                        </a>
                    </div>

                    <div class="col-xs-5 text_l">
                        <a class="btn btn-block btn-line-c" v-on:click="setLocationSelected(2)">
                            <h4 class="local_btn">마포구</h4>
                        </a>
                    </div>
                </div>

                <div class="row mar_15">
                    <div class="col-xs-offset-1 col-xs-5 text_r">
                        <a class="btn btn-block btn-line-c" v-on:click="setLocationSelected(3)">
                            <h4 class="local_btn">강남구</h4>
                        </a>
                    </div>

                    <div class="col-xs-5 text_l">
                        <a class="btn btn-block btn-line-c"  v-on:click="setLocationSelected(4)">
                            <h4 class="local_btn">송파구</h4>
                        </a>
                    </div>
                </div>

            </div>

            <!-- 활성화는 bottom_btn_p, 비활성화는 bottom_btn_c -->

            <Button class="mar_50" style="width: 100%;" v-bind:class="{bottom_btn_p : location_id > 0, bottom_btn_c: location_id == 0}" v-on:click="setLocationUpdate">
                <h4 class="text_c">
                    <b>다음</b>
                </h4>
            </Button>
        </div>

        @include('shared.location_script')
    </div>
@stop
