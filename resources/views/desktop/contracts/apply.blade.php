@extends('desktop.header')
@section('title')
    채용
@stop

@section('content')

<div id="page-wrapper">

<!-- Main -->
  <div class="wrapper">
    <div class="container" id="main">

      <!-- Content -->
        <article id="content">
          <header>
            <h2>채용</h2>
            <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit
            dolor neque semper.</p>
          </header>
          <a href="#" class="image featured"><img src="/img/etc/pic06.jpg" alt="" /></a>
					<ul class="default">
						<li>계약기간동안은 계약서와 요청한 서류를 보관해주세요.</li>
						<li>현금지급보다는 기록을 남길 수 있는 은행송금을 추천드립니다.</li>
						<li>계약 이행이 불가능할 경우 장기는 2주, 단기는 2틀 전에는 계약 해지 의사를 밝혀주세요.</li>
						<li>호칭은 상호 존중의 표현을 담을 수 있게 사용해주세요.</li>
					</ul>
        </article>
    </div>
  </div>
</div>

    @include('desktop.footer')
@stop
