@extends('desktop.header')
@section('title')
    서비스 소개
@stop

@section('content')

    @section('nav_header')
      <!-- 메인 디자인 -->
      <section id="hero" class="container">
        <header>
          <h2>우리동네 모모님</h2>
        </header>
        <p>내 아이를 돌봐줄 우리동네 모모님을 만나보세요.</p>
      </section>
    @stop

  <!-- Features 1 -->
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <section class="6u 12u(narrower) feature">
            <div class="image-wrapper first">
              <a href="#" class="image featured first"><img src="/img/etc/pic01.jpg" alt="" /></a>
            </div>
            <header>
              <h2>Semper magna neque vel<br />
              adipiscing curabitur</h2>
            </header>
            <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
            sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
            adipiscing elit. Curabitur vel sem sit.</p>
            <ul class="actions">
              <li><a href="#" class="button">Elevate my awareness</a></li>
            </ul>
          </section>
          <section class="6u 12u(narrower) feature">
            <div class="image-wrapper">
              <a href="#" class="image featured"><img src="/img/etc/pic02.jpg" alt="" /></a>
            </div>
            <header>
              <h2>Amet lorem ipsum dolor<br />
              sit consequat magna</h2>
            </header>
            <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
            sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
            adipiscing elit. Curabitur vel sem sit.</p>
            <ul class="actions">
              <li><a href="#" class="button">Elevate my awareness</a></li>
            </ul>
          </section>
        </div>
      </div>
    </div>

  <!-- Promo -->
    <div id="promo-wrapper">
      <section id="promo">
        <h2>모모님은 누가 만드나요?​</h2>
				<p>
					<br>​모모님은 국내 워킹맘들의 육아 문제에 공감하는 사람들이 모여 만든 프로젝트에서 시작했어요. 지금은 서강대학교에서 창업을 준비하는 학생들이 국가지원을 받으며 "아이를 키우는 부모님들에게 행복한 시간을 만들어 주자"는 목표를 가지고 2017년 상반기에 나올 모바일 서비스를 열정을 불태우며 준비하고 있습니다.
					​<br>팀원들이 보고 싶으시면 아래의 팀 구경하기를 눌러보세요!</p>
			<ul class="actions">
				<li><a href="{{ URL::to("about/team") }}" class="button">팀원 구경</a></li>
			</ul>
      </section>
    </div>

  <!-- Features 2 -->
    <div class="wrapper">
      <section class="container">
        <header class="major">
          <h2>상세소개를 드릴게요</h2>
          <p>모모님 앱의 화면을 미리 살펴보면요</p>
        </header>
        <div class="row features">
          <section class="4u 12u(narrower) feature">
            <div class="image-wrapper first">
              <a href="#" class="image featured"><img src="/img/etc/step1.png" alt="" /></a>
            </div>
						<h3>Step 1. 지역 설정</h3>
						<p> 우리동네 모모님이 내 아이를 맡기기 더 믿기 쉽겠죠? 내가 사는 지역을 한손으로 손쉽게 입력해주세요!</p>
          </section>
          <section class="4u 12u(narrower) feature">
            <div class="image-wrapper">
              <a href="#" class="image featured"><img src="/img/etc/step2.png" alt="" /></a>
            </div>
						<h3>Step 2. 리스트 화면</h3>
						<p>우리 아이를 맡아줄 우리 동네 모모님이 있나 지도를 통해 확인하세요.</p>
          </section>
          <section class="4u 12u(narrower) feature">
            <div class="image-wrapper">
              <a href="#" class="image featured"><img src="/img/etc/step3.png" alt="" /></a>
            </div>
						<h3>Step 3. 상세 화면</h3>
						<p> 우리 아이를 맡아줄 모모님의 소개를 확인해보세요 :D</p>
          </section>
        </div>

      </section>
    </div>


    @include('desktop.footer')
@stop