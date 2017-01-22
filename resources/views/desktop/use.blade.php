@extends('desktop.header')
@section('title')
    이용방법
@stop

@section('content')

  <!-- Main -->
  <div class="wrapper">
    <div class="container" id="main">


          <section class="container">
            <header class="major">
              <h2>모모님 관련 서류</h2>
              <p>다음의 내용은 필요하신 경우 참고하실 가이드라인이며, 모든 계약 내용은 어머님과 모모님의 협의로 결정됩니다.</p>
            </header>

            <div class="row features">
              <section class="4u 12u(narrower) feature">
                <!-- <header>
                  <h3>표준 계약서</h3>
                </header>
                <div class="image-wrapper first">
                  <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
                vel sem sit dolor neque semper magna lorem ipsum.</p> -->
                <ul class="actions">
                  <li><a href="{{URL::to("about/use/interview")}}" class="button">모모님 등록 및 면접</a></li>
                </ul>
              </section>
              <section class="4u 12u(narrower) feature">
                <ul class="actions">
                  <li><a href="{{URL::to("about/use/apply")}}" class="button">채용</a></li>
                </ul>
              </section>
              <section class="4u 12u(narrower) feature">
                <ul class="actions">
                  <li><a href="{{URL::to("about/use/health")}}" class="button">건강진단서 발급</a></li>
                </ul>
              </section>
							<section class="4u 12u(narrower) feature">
                <ul class="actions">
                  <li><a href="{{URL::to("about/use/form")}}" class="button">서식 다운로드</a></li>
                </ul>
              </section>
							<section class="4u 12u(narrower) feature">
                <ul class="actions">
                  <li><a href="{{URL::to("about/use/cost")}}" class="button">비용</a></li>
                </ul>
              </section>
							<section class="4u 12u(narrower) feature">
                <ul class="actions">
                  <li><a href="{{URL::to("about/use/workscope")}}" class="button">업무 범위</a></li>
                </ul>
              </section>
            </div>

          </section>
    </div>
  </div>

    @include('desktop.footer')
@stop