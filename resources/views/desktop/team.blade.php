@extends('desktop.header')
@section('title')
    팀원소개
@stop

@section('content')

  <!-- Main -->
    <div class="wrapper">
      <div class="container" id="main">


        <div class="row features">
          <section class="3u 12u(narrower) feature">
            <div class="image-wrapper first">
              <a href="#" class="image featured"><img src="/img/etc/person1.png" alt="" /></a>
            </div>
            <header>
              <h3 class="name">Ken</h3>
            </header>
            <p class="whoAmI">이쪽 IT업계에서 살아먹고, 디자인합니다. 평범한 레덕(레슬링덕)이며, 인생을 존시나처럼 살고싶습니다. 혼자서도 잘놉니다. 토크 주워먹기(?)가 특기입니다.</p>
          </section>

          <section class="3u 12u(narrower) feature">
            <div class="image-wrapper">
              <a href="#" class="image featured"><img src="/img/etc/person2.png" alt="" /></a>
            </div>
            <header>

              <h3 class="name">Joe</h3>
            </header>
            <p class="whoAmI">IT를 통해서 실제 문제를 해결하는 것에 관심이 많습니다. 재즈와 여행을 특히 좋아하고, 가끔 말이 없어질 때가 있는데 먹을 걸 주면 금방 돌아오는 편입니다.</p>
          </section>

          <section class="3u 12u(narrower) feature">
            <div class="image-wrapper">
              <a href="#" class="image featured"><img src="/img/etc/person3.png" alt="" /></a>
            </div>
            <header>
              <h3 class="name">Sally</h3>
            </header>
            <p class="whoAmI">경영과 컴퓨터공학을 공부했습니다. 새로운 것과 어려운 것을 좋아합니다. 뭐든 하면 될거라고 생각합니다.</p>
          </section>

          <section class="3u 12u(narrower) feature">
            <div class="image-wrapper">
              <a href="#" class="image featured"><img src="/img/etc/person4.png" alt="" /></a>
            </div>
            <header>
              <h3 class="name">Dolor sit consequat magna</h3>
            </header>
            <p class="whoAmI">Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
            vel sem sit dolor neque semper magna lorem ipsum.</p>
          </section>
        </div>
      </div>
    </div>

@include('desktop.footer')
@stop