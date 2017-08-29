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
        <div class="terms">
            <div class="container">
                <ol class="step-list">
                    <li class="active">
                        <p class="figure">
                            <img src="/assets/images/membership/step_xs_img01_active.png" class="visible-xs" alt="step01">
                            <img src="/assets/images/membership/step_lg_img01_active.png" class="hidden-xs" alt="step01">
                        </p>
                        <p class="details"><i>Step01</i><br class="visible-xs"> 약관동의</p>
                    </li>
                    <li>
                        <p class="figure">
                            <img src="/assets/images/membership/step_xs_img02.png" alt="step02">
                        </p>
                        <p class="details"><i>Step02</i><br class="visible-xs"> 회원정보등록</p>
                    </li>
                    <li>
                        <p class="figure">
                            <img src="/assets/images/membership/step_xs_img03.png" alt="step03">
                        </p>
                        <p class="details"><i>Step03</i><br class="visible-xs"> 가입완료</p>
                    </li>
                </ol>
                
                <div class="agree">
                    <article class="terms-info">
                        <h4>이용약관</h4>
                        <div class="article-content">
                            이용약관 내용
                        </div>
                        <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                    </article>
                    <article class="privacy">
                        <h4>개인정보처리방침</h4>
                        <div class="article-content">
                            개인정보 처리 방침 내용
                        </div>
                        <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="/membership/join.php" class="btn btn-sm btn-aqua" role="button">다음</a>
                            <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
