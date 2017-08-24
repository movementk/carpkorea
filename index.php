<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
</head>
<body class="nav-opened">
	<div id="top-nav" class="visible-lg">
		<div class="container">
			<ul class="sns">
				<li><a class="fb" href="#" target="_blank"><span class="sr-only">페이스북</span></a></li>
				<li><a class="dc" href="#" target="_blank"><span class="sr-only">다음</span></a></li>
			</ul>
			<ul class="util">
				<li><a href="#">로그인</a></li>
				<li><a href="#">회원가입</a></li>
				<li><a href="#">정보수정</a></li>
			</ul>
		</div>
	</div>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<h1 class="logo"><a href="/"><span class="sr-only">한국대학원리연구회</span></a></h1>
					<button class="btn btn-link btn-nav-open hidden-lg"><span class="sr-only">메뉴 열기</span></button>
				</div>
				<div class="col-lg-9 visible-lg">
					<nav class="nav">
						<ul>
							<li class="active">
								<a href="#">CARP<span></span></a>
								<div>
									<div class="container">
										<ul>
											<li class="active"><a href="#">CARP 소개</a></li>
											<li><a href="#">회장 인사말</a></li>
											<li><a href="#">설립자 소개</a></li>
											<li><a href="#">연혁</a></li>
											<li><a href="#">조직도</a></li>
											<li><a href="#">프로필 게시판</a></li>
											<li><a href="#">찾아오시는 길</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<a href="#">공지사항<span></span></a>
								<div>
									<div class="container">
										<ul>
											<li><a href="#">공지사항</a></li>
											<li><a href="#">일정게시판</a></li>
											<li><a href="#">뉴스</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<a href="#">CARP 광장<span></span></a>
								<div>
									<div class="container">
										<ul>
											<li><a href="#">참부모선포 광장</a></li>
											<li><a href="#">말씀 광장</a></li>
											<li><a href="#">남북통일 광장</a></li>
											<li><a href="#">사회 광장</a></li>
											<li><a href="#">심정문화 광장</a></li>
											<li><a href="#">자유 광장</a></li>
											<li><a href="#">콜라멘토스 광장</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<a href="#">활동게시판<span></span></a>
								<div>
									<div class="container">
										<ul>
											<li><a href="#">CARP 활동게시판</a></li>
											<li><a href="#">Q&amp;A</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<a href="#">자료실<span></span></a>
								<div>
									<div class="container">
										<ul>
											<li><a href="#">사진게시판</a></li>
											<li><a href="#">영상게시판</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<a href="#">학생회게시판<span></span></a>
								<div>
									<div class="container">
										<ul>
											<li><a href="#">소개</a></li>
											<li><a href="#">비전목표</a></li>
											<li><a href="#">중앙학생회</a></li>
											<li><a href="#">51주년 종횡일치</a></li>
											<li><a href="#">팀별소개</a></li>
											<li><a href="#">현장회장단</a></li>
											<li><a href="#">학군학사지회</a></li>
											<li><a href="#">하고싶은 말</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<a href="#">CMS 후원<span></span></a>
								<div>
									<div class="container">
										<ul>
											<li><a href="#">CMS 후원</a></li>
											<li><a href="#">CARP 소식</a></li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div id="nav-side" class="hidden-lg">
		<div class="nav-content">
			<div class="nav-header">
				<h1><a href="/"><span class="sr-only">한국대학원리연구회</span></a></h1>
				<button type="button" class="btn btn-link btn-nav-close"><img src="/assets/images/ico_close.png" alt="닫기"></button>
			</div>
			<div class="nav-body">
				<nav class="nav">
					<ul>
						<li class="has-child">
							<a href="#">R&amp;D</a>
							<ul>
								<li class="has-child">
									<a href="#">Research</a>
									<ul>
										<li><a href="/rnd/new_material.php">바이오신소재</a></li>
										<li class="has-child">
											<a href="/rnd/platform_technology.php">플랫폼 기술</a>
											<ul>
												<li><a href="/rnd/platform_technology.php?tab=1">Innovation Gene Therapy</a></li>
												<li><a href="/rnd/platform_technology.php?tab=2">Homologous Epitopes Region Immunization Technology</a></li>
												<li><a href="/rnd/platform_technology.php?tab=3">Cancer Therapies in Models</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="/rnd/development.php">Development</a>
								</li>
							</ul>
						</li>
						<li class="has-child">
							<a href="#">GLP</a>
							<ul>
								<li class="has-child">
									<a href="#">Safety Study</a>
									<ul>
										<li><a href="/glp/safety_study.php">GLP Safety Study</a></li>
										<li><a href="/glp/safety_study.php">시험항목</a></li>
										<li><a href="/glp/safety_study.php">시험문의</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="has-child">
							<a href="#">CRO</a>
							<ul>
								<li class="has-child">
									<a href="#">정밀의학</a>
									<ul>
										<li><a href="/cro/vivo_efficacy.php">기능성 효능평가 서비스(Preclinical in vivo efficacy service)</a></li>
									</ul>
								</li>
								<li class="has-child">
									<a href="#">Global CRO</a>
									<ul>
										<li><a href="/cro/snbl.php">SNBL</a></li>
										<li><a href="/cro/senzagen.php">Senzagen</a></li>
									</ul>
								</li>
								<li>
									<a href="/cro/zebrafish.php">Zebrafish Screening</a>
								</li>
							</ul>
						</li>
						<li class="has-child">
							<a href="#">실험동물센터</a>
							<ul>
								<li><a href="/animal/experimental_animals.php">실험동물 생산</a></li>
								<li><a href="/animal/disease_modeling.php">질환모델 제작 - KO제작, 관리</a></li>
								<li><a href="/animal/breeding_management.php">청정화, 사육관리</a></li>
								<li><a href="/animal/request_write.php">유전자변형 문의</a></li>
							</ul>
						</li>
						<li class="has-child">
							<a href="#">PRODUCT</a>
							<ul>
								<li><a href="/products/gene_delivery.php">Gene Delivery</a></li>
								<li><a href="/products/antibody_production.php">Antibody Production</a></li>
								<li><a href="/products/npg.php">면역부전 모델 (NPG)</a></li>
								<li><a href="/products/urg.php">인간화 간 모델 (URG)</a></li>
								<li><a href="/products/ag129.php">지카, 메르스, 뎅기, 인플루엔자 바이러스 연구 (AG129)</a></li>
								<li><a href="/products/vaccine.php">인플루엔자 바이러스, 백신 연구</a></li>
								<li><a href="/products/ellegaard_gottingen.php">Ellegaard Göttingen</a></li>
							</ul>
						</li>
						<li class="has-child">
							<a href="#">문의</a>
							<ul>
								<li><a href="/center/notice_list.php">문의<span></span></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<main id="content">

	</main>
	<nav id="policy">
		<div class="container">
			<ul>
				<li class="hidden-xs"><a href="#">연구회 소개</a></li>
				<li class="hidden-xs"><a href="#">위치 및 연락처</a></li>
				<li><a href="#">이용약관</a></li>
				<li><a href="#">개인정보취급방침</a></li>
				<li><a href="#">이메일수집무단거부</a></li>
			</ul>
		</div>
	</nav>
	<footer id="footer">
		<div class="container">
			<address>04309 서울시 용산구 청파로 47나길 28 (청파동 2가 9-1) 한국대학원리연구회</address>
			<ul class="contact">
				<li>대표전화 : 02-718-3732</li>
				<li>팩스 : 02-718-3521</li>
				<li>E-mail : <a href="mailto:k-carphq@hanmail.net" target="_blank">k-carphq@hanmail.net</a></li>
			</ul>
			<p class="copyright">(C)2017 한국대학원리연구회. ALL RIGHT RESERVED. <br class="visible-xs">SITE BY <a href="//movementk.com" target="_blank">MOVEMENT K GROUP</a>.</p>
		</div>
	</footer>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
	<script>
		(function($) {
			$(document).on('click', '#header .btn-nav-open', function() {
				$('body').addClass('nav-opened');
			});
			$(document).on('click', '#nav-side', function(e) {
				if ($(e.target).attr('id') == 'nav-side') {
					$('body').removeClass('nav-opened');
				}
			});
			$(document).on('click', '#nav-side .btn-nav-close', function() {
				$('body').removeClass('nav-opened');
			});

			$(document).on('mouseenter focus', '#header .nav > ul > li > a', function(e) {
				$(this).parent().siblings('.active').removeClass('active');
				$(this).parent().addClass('active');
				e.preventDefault();
			});
			$(document).on('mouseleave', '#header', function() {
				//$('body').removeClass('nav-expanded');
				$('#header .nav > ul > li').removeClass('active');
			});
		})(jQuery);
	</script>
</body>
</html>
