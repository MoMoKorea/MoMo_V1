@extends('desktop.header')
@section('title')
    건강진단서 발급
@stop

@section('content')

<div id="page-wrapper">
<!-- 서브페이지의 header -->

  <div class="wrapper">
    <div class="container" id="main">

      <!-- Content -->
        <article id="content">
          <header>
            <h2>건강진단서 발급</h2>
					<header>
						<br>
						<div class="table-responsive">
							<table class="default" style="width: 100%">
						   <tr>
						      <td>발급서류명</td>
						      <td>구비서류</td>
						      <td>검사항목</td>
						      <td>수수료(원)</td>
						      <td>처리기간</td>
						   </tr>
						   <tr>
						      <td>위생분야종사자 건강진단결과서(구 보건증)</td>
						      <td>신분증(주민등록증, 운전면허증)</td>
						      <td>폐결핵, 장티푸스, 세균성이질, 전염성피부질환</td>
						      <td>1,500원 (지역별 금액 차이 있음)</td>
						      <td>5일(휴일 제외)</td>
						   </tr>
						   <tr>
						      <td>건강진단서</td>
						      <td>신분증(주민등록증, 운전면허증)</td>
						      <td>폐결핵, 매독, 에이즈, 뇨단백, 뇨당뇨 전염성피부질환</td>
						      <td>약 15,000원 (지역별 금액 차이 있음)</td>
						      <td>5일(휴일 제외)</td>
						   </tr>
						   <tr>
						      <td>건간진단서(B형간염추가)</td>
						      <td>신분증(주민등록증, 운전면허증)</td>
						      <td>폐결핵, 매독, 에이즈, 뇨단백, 뇨당뇨 전염성피부질환, B형간염</td>
						      <td>약 20,000원 (지역별 금액 차이 있음)</td>
						      <td>5일(휴일 제외)</td>
						   </tr>
						 	</table>
						</div>
                    </header>
            </header>
        </article>

    </div>
  </div>
</div>

@include('desktop.footer')
@stop