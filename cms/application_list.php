<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/cms.css" rel="stylesheet">
</head>
<body class="cms"> <!-- Class 폴더 -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
   
    <!-- Content Start -->
	<main id="content">
        <!-- Page-Header -->
        <div class="page-header">
            <h2 class="header-title">CMS 후원</h2>
            <div class="container">
                <h3 class="page-title">CMS 후원</h3>
            </div>
        </div>
        <article class="application-list">
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

                <div class="table-wrap board-list">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>작성자</th>
                                <th>등록일</th>
                                <th>조회수</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자! CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="subject"><a href="/cms/application.php">CARP특공대! 세상으로 총 진군하자!</a></td>
                                <td>관리자</td>
                                <td>2017-08-05</td>
                                <td>27</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="/cms/application_upload.php" class="btn btn-lg btn-aqua" role="button">CMS 신청서 업로드</a>
                    </p>
                </div>
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
