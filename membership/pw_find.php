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
                        <li><a href="/membership/id_find.php">아이디 찾기</a></li>
                        <li class="active"><a href="/membership/pw_find.php">비밀번호 찾기</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <article class="pw-find find">
            <h4 class="article-title">가입한 아이디</h4>
            <div class="article-content">
                <form action="#">
                    <div class="form-group">
                        <input type="text" id="u-id" class="form-control" placeholder="아이디">
                        <label class="sr-only" for="u-id">아이디</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="u-name" class="form-control" placeholder="이름">
                        <label class="sr-only" for="u-name">이름</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="u-mail" class="form-control" placeholder="이메일">
                        <label class="sr-only" for="u-mail">이메일</label>
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-lg btn-aqua">확인</button>
                        </p>
                    </div>
                </form>
            </div>
        </article>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
