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
        </div>
        <section class="login">
            <div class="container">
                <article class="general-login">
                    <h3 class="article-title">로그인</h3>
                    <div class="article-content">
                        <form action="#">
                            <div class="form-group">
                                <label for="u-id" class="sr-only">아이디</label>
                                <input type="text" id="u-id" class="form-control" placeholder="아이디">
                            </div>
                            <div class="form-group">
                                <label for="u-pw" class="sr-only">비밀번호</label>
                                <input type="password" id="u-pw" class="form-control" placeholder="비밀번호">
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-sm btn-aqua">로그인</button>
                                    <a href="/membership/terms.php" class="btn btn-sm btn-aqua" role="button">회원가입</a>
                                </p>
                            </div>
                        </form>
                        <ul>
                            <li>
                                <dl>
                                    <dt>아이디를 잊어버리셨나요?</dt>
                                    <dd><a href="/membership/id_find.php">아이디 찾기</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>비밀번호를 잊어버리셨나요?</dt>
                                    <dd><a href="/membership/pw_find.php">비밀번호 찾기</a></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="sns-login">
                    <h3 class="article-title">SNS 로그인</h3>
                    <div class="article-content">
                        <ul class="sns-list">
                            <li class="facebook">
                                <a href="#">
                                    <i class="link-icon">
                                        <img src="/assets/images/membership/icon_facebook.png" alt="facebook">
                                    </i>
                                    페이스북 계정으로<br class="visible-sm"> 로그인
                                </a>
                            </li>
                            <li class="naver">
                                <a href="#">
                                    <i class="link-icon">
                                        <img src="/assets/images/membership/icon_naver.png" alt="naver">
                                    </i>
                                    네이버 아이디로<br class="visible-sm"> 로그인
                                </a>
                            </li>
                            <li class="kakao">
                                <a href="#">
                                    <i class="link-icon">
                                        <img src="/assets/images/membership/icon_kakao.png" alt="kakaotalk">
                                    </i>
                                    카카오 아이디로<br class="visible-sm"> 로그인
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </section>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
