@extends('desktop.header')
@section('title')
    모모님 등록 및 소개
@stop

@section('content')

    <div id="page-wrapper">
<!-- 서브페이지의 header -->
<!-- Main -->
  <div class="wrapper">
    <div class="container" id="main">

      <!-- Content -->
        <article id="content">
          <header>
            <h2>모모님 등록 및 소개</h2>
            <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit
            dolor neque semper.</p>
          </header>
          <a href="#" class="image featured"><img src="/img/etc/pic06.jpg" alt="" /></a>

					<ul class="default">
						<li>모모님 등록 시 정보를 최대한 많이 적어 불필요한 연락과 면접을 줄여주세요.</li>
						<li>전화면접으로 상호 의견을 교환한 후에 채용 의사가 있으시면 실제로 면접을 봐주세요.</li>
						<li>
							필요하신 경우 업무 범위, 업무 시간, 입금, 계약 해지 등에 관해 계약서를 작성하시고, 날인하여 복사한 후 계약 만료시까지 각자 가지고 계세요.
						</li>
						<li>비상시에 대비하여 채용자와 모모님의 가족 연락처를 서로 교환하세요.</li>
						<li>근무 시작일에 가져올 서류를 요청해 주세요.</li>
						<li>요청사항은 가능한 자세히 말해주세요</li>
					</ul>
        </article>


    </div>
  </div>
</div>

    @include('desktop.footer')
@stop
