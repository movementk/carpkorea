<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/carp.css" rel="stylesheet">
</head>
<body class="carp"> <!-- Class 폴더 -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
   
    <!-- Content Start -->
	<main id="content" class="profile">
        <!-- Page-Header -->
        <div class="page-header">
            <h2 class="header-title">CARP</h2>
            <div class="container">
                <h3 class="page-title">조직도</h3>
                <nav class="sub-snb">
                    <ul>
                        <li class="active"><a href="#">중앙공직자</a></li>
                        <li><a href="#">현장공직자</a></li>
                        <li class="space"><a href="#">천일국<br class="visible-xs"> 청년선교사</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
        <article class="member">
            <div class="container">
                <!-- 검색폼 -->
                <div class="search-form">
                    <form action="#">
                        <div class="form-group">
                            <select class="form-control">
                                <option>제목</option>
                            </select>
                            <label for="search" class="sr-only">검색어</label>
                            <input type="text" id="search" class="form-control">
                        </div>
                        <p class="btn-search">
                            <button type="submit" class="btn">검색</button>
                        </p>
                    </form>
                </div>
                
                <div class="member-list">
                    <div class="member-info">
                        <div class="member-img">
                            <p>
                                <img src="/assets/images/carp/member_img01.jpg" alt="최훈문">
                            </p>
                        </div>
                        <div class="details">
                            <h4 class="name">최훈문</h4>
                            <ul>
                                <li>
                                    <dl>
                                        <dt>직책</dt>
                                        <dd>사무국장</dd>
                                    </dl>
                                </li>
                                <li>
                                    <i class="icon-phone"><span class="sr-only">연락처</span></i>
                                    070-44220638
                                </li>
                                <li>
                                    <i class="icon-mail"><span class="sr-only">이메일</span></i>
                                    <a href="mailto:hoonmoonchoi@gmail.com">hoonmoonchoi@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-info">
                        <div class="member-img">
                            <p>
                                <img src="/assets/images/carp/member_img02.jpg" alt="정효연">
                            </p>
                        </div>
                        <div class="details">
                            <h4 class="name">정효연</h4>
                            <ul>
                                <li>
                                    <dl>
                                        <dt>직책</dt>
                                        <dd>과장</dd>
                                    </dl>
                                </li>
                                <li>
                                    <i class="icon-phone"><span class="sr-only">연락처</span></i>
                                     02-718-3520
                                </li>
                                <li>
                                    <i class="icon-mail"><span class="sr-only">이메일</span></i>
                                    <a href="mailto:qoohmm@hanmail.net">qoohmm@hanmail.net</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-info">
                        <div class="member-img">
                            <p>
                                <img src="/assets/images/carp/member_img03.jpg" alt="이예정">
                            </p>
                        </div>
                        <div class="details">
                            <h4 class="name">이예정</h4>
                            <ul>
                                <li>
                                    <dl>
                                        <dt>직책</dt>
                                        <dd>과장</dd>
                                    </dl>
                                </li>
                                <li>
                                    <i class="icon-phone"><span class="sr-only">연락처</span></i>
                                    070-4918-1101
                                </li>
                                <li>
                                    <i class="icon-mail"><span class="sr-only">이메일</span></i>
                                    <a href="mailto:yejung23@hanmail.net">yejung23@hanmail.net</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-info">
                        <div class="member-img">
                            <p>
                                <img src="/assets/images/carp/member_img04.jpg" alt="최훈문">
                            </p>
                        </div>
                        <div class="details">
                            <h4 class="name">김정미</h4>
                            <ul>
                                <li>
                                    <dl>
                                        <dt>직책</dt>
                                        <dd>대리</dd>
                                    </dl>
                                </li>
                                <li>
                                    <i class="icon-phone"><span class="sr-only">연락처</span></i>
                                    02-718-3732
                                </li>
                                <li>
                                    <i class="icon-mail"><span class="sr-only">이메일</span></i>
                                    <a href="mailto:whs2015@hanmail.net">whs2015@hanmail.net</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- paging -->
                <nav class="paging" aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <i class="icon-angle-double-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Previous">
                                <i class="icon-angle-left"></i>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="hidden-xs"><a href="#">6</a></li>
                        <li class="hidden-xs"><a href="#">7</a></li>
                        <li class="hidden-xs"><a href="#">8</a></li>
                        <li class="hidden-xs"><a href="#">9</a></li>
                        <li class="hidden-xs"><a href="#">10</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="icon-angle-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="icon-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </article>
        
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
