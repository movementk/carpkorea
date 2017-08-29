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
                <h3 class="page-title">아이디/비밀번호 찾기</h3>
                <nav class="sub-snb">
                    <ul>
                        <li class="active"><a href="/membership/id_find.php">아이디 찾기</a></li>
                        <li><a href="/membership/pw_find.php">비밀번호 찾기</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <article class="success-id find">
            <div class="article-content">
                <p class="success-txt">
                    ABCD 회원님의 아이디를<br>
                    ABCD#@naver.com 으로 보냈습니다.
                </p>
                <div class="btn-area">
                    <p>
                        <button type="submit" class="btn btn-lg btn-aqua">로그인 하기</button>
                    </p>
                </div>
            </div>
        </article>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
