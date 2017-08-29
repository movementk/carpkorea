<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/membership.css" rel="stylesheet">
</head>
<body class="membership">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
   
    <!-- Content Start -->
	<main id="content">
        <!-- Page-Header -->
        <div class="page-header">
            <h2 class="header-title">멤버쉽</h2>
            <div class="container">
                <h3 class="page-title">회원가입</h3>
            </div>
        </div>
        <div class="success">
            <div class="container">
                <ol class="step-list">
                    <li>
                        <p class="figure">
                            <img src="/assets/images/membership/step_xs_img01.png" alt="step01">
                        </p>
                        <p class="details"><i>Step01</i><br class="visible-xs"> 약관동의</p>
                    </li>
                    <li>
                        <p class="figure">
                            <img src="/assets/images/membership/step_xs_img02.png" alt="step02">
                        </p>
                        <p class="details"><i>Step02</i><br class="visible-xs"> 회원정보등록</p>
                    </li>
                    <li class="active">
                        <p class="figure">
                            <img src="/assets/images/membership/step_xs_img03_active.png" class="visible-xs" alt="step03">
                            <img src="/assets/images/membership/step_lg_img03_active.png" class="hidden-xs" alt="step03">
                        </p>
                        <p class="details"><i>Step03</i><br class="visible-xs"> 가입완료</p>
                    </li>
                </ol>
                
                <article>
                    <div class="row">
                        <div class="col-xs-12 col-sm-5">
                            <figure>
                                <img src="/assets/images/membership/success_img.gif" class="img-responsive" alt="가입완료">
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <div class="success-summary">
                                <h4>
                                    <i>한국대학원리연구회</i><br class="visible-xs">
                                    홈페이지<br class="visible-sm"> 회원가입이 <br class="visible-xs visible-md visible-lg">
                                    완료되었습니다.
                                </h4>
                                <small>로그인 하시면 다양한<br class="visible-xs"> 서비스를 이용하실 수 있습니다.</small>
                                <div class="btn-area">
                                    <p>
                                        <a href="/" class="btn btn-sm btn-aqua" role="button">메인으로</a>
                                        <a href="/membership/login.php" class="btn btn-sm btn-gray" role="button">로그인하기</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
            </div>
        </div>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
