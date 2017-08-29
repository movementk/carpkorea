<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/activity.css" rel="stylesheet">
</head>
<body class="activity"> <!-- Class 폴더 -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
   
    <!-- Content Start -->
	<main id="content">
        <!-- Page-Header -->
        <div class="page-header">
            <h2 class="header-title">활동게시판</h2>
            <div class="container">
                <h3 class="page-title">Q&amp;A</h3>
            </div>
        </div>
        <section class="pw-confirm">
            <div class="container">
                <div class="section-header">
                    <h4 class="title">비밀번호 확인</h4>
                </div>
                <div class="section-content">
                    <p class="summary">
                        회원님의 개인정보를 안전하게 보호하기 위해 비밀번호를 다시 한번 확인 합니다. <br class="hidden-xs">
                        타인에게 비밀번호가 노출되지 않도록 항상 주의하세요!
                    </p>
                    <form action="#">
                        <ul>
                            <li class="writer">
                                <dl>
                                    <dt>작성자</dt>
                                    <dd><p class="user-id">작성자id**</p></dd>
                                </dl>
                            </li>
                            <li class="u-pw">
                                <dl>
                                    <dt><label for="u-pw">비밀번호</label></dt>
                                    <dd>
                                        <div class="form-group">
                                            <input type="text" id="u-pw" class="form-control">
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-lg btn-aqua">확인</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
