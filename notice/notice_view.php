<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/notice.css" rel="stylesheet">
</head>
<body class="notice"> <!-- Class 폴더 -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
   
    <!-- Content Start -->
	<main id="content">
        <!-- Page-Header -->
        <div class="page-header">
            <h2 class="header-title">공지사항</h2>
            <div class="container">
                <h3 class="page-title">공지사항</h3>
            </div>
        </div>
        <article class="notice-view">
            <div class="container">
                <div class="board-view">
                    <div class="view-header">
                        <h4 class="subject">CARP특공대! 세상으로 총 진군하자!</h4>
                        <ul class="writer-info">
                            <li class="writer">
                                <p class="u-id">작성자아이디**</p>
                            </li>
                            <li class="date">
                                <dl>
                                    <dt>등록일</dt>
                                    <dd>2017-08-05</dd>
                                </dl>
                            </li>
                            <li class="count">
                                <dl>
                                    <dt>조회수</dt>
                                    <dd>1,234</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="view-content">
                        게시판 상세 내용
                    </div>
                    <dl class="attach">
                        <dt><i class="icon-attach"></i>첨부파일</dt>
                        <dd>
                            <a href="#">attach.pdf</a>
                            <a href="#">attach.pdf</a>
                        </dd>
                    </dl>

                    <div class="btn-area">
                        <p>
                            <a href="/notice/notice_write.php" class="btn btn-xs btn-org" role="button">글쓰기</a>
                            <a href="#" class="btn btn-xs btn-gray" role="button">수정하기</a>
                            <a href="#" class="btn btn-xs btn-gray" role="button">삭제하기</a>
                        </p>
                        <p>
                            <a href="/notice/notice_list.php" class="btn btn-lg btn-aqua" role="button">목록</a>
                        </p>
                    </div>

                    <div class="reply-area">
                        <form action="#">
                            <div class="form-group">
                                <label for="comment" class="sr-only">댓글달기</label>
                                <input type="text" id="comment" class="form-control" placeholder="댓글을 입력하세요.">
                                <p class="btn-comment">
                                    <button type="submit" class="btn">확인</button>
                                </p>
                            </div>
                        </form>
                        <ul class="comment-list">
                            <li>
                                <div class="info">
                                    <p class="u-name">대학원리</p>
                                    <p class="date">2016.10.10</p>
                                    <ul>
                                        <li><a href="#">답글</a></li>
                                        <li><a href="#">수정</a></li>
                                        <li><a href="#">삭제</a></li>
                                    </ul>
                                </div>
                                <p class="content">댓글을 입력하세요. 댓글을 입력하세요.</p>
                            </li>
                            <li class="reply">
                                <div class="info">
                                    <p class="u-name">대학원리</p>
                                    <p class="date">2016.10.10</p>
                                    <ul>
                                        <li><a href="#">답글</a></li>
                                        <li><a href="#">수정</a></li>
                                        <li><a href="#">삭제</a></li>
                                    </ul>
                                </div>
                                <p class="content">댓글을 입력하세요. 댓글을 입력하세요.</p>
                            </li>
                            <li>
                                <div class="info">
                                    <p class="u-name">대학원리</p>
                                    <p class="date">2016.10.10</p>
                                    <ul>
                                        <li><a href="#">답글</a></li>
                                        <li><a href="#">수정</a></li>
                                        <li><a href="#">삭제</a></li>
                                    </ul>
                                </div>
                                <p class="content">댓글을 입력하세요. 댓글을 입력하세요.</p>
                            </li>
                            <li>
                                <div class="info">
                                    <p class="u-name">대학원리</p>
                                    <p class="date">2016.10.10</p>
                                    <ul>
                                        <li><a href="#">답글</a></li>
                                        <li><a href="#">수정</a></li>
                                        <li><a href="#">삭제</a></li>
                                    </ul>
                                </div>
                                <p class="content">댓글을 입력하세요. 댓글을 입력하세요.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
