<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class=""> <!-- Class 폴더 -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
   
    <!-- Content Start -->
	<main id="content">
        <!-- Page-Header -->
        <div class="page-header">
            <h2 class="header-title">CARP</h2>
            <div class="container">
                <h3 class="page-title">CARP 소개</h3>
                <nav class="sub-snb">
                    <ul>
                        <li class="active"><a href="#">창립목적</a></li>
                        <li><a href="#">VISION MISSION</a></li>
                        <li><a href="#">CI</a></li>
                        <li class="space"><a href="#">향후 나아갈 길<br class="visible-xs"> Action 100</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="section-header">
                    <h4 class="title">창립목적</h4>
                </div>
                <div class="section-content">
                    <p class="page-summary">
                        본인이 <i>CARP</i>를 창설하게 된 동기중 
                        의 하나는<br class="hidden-xs"> 대학생들의 그 <i>젊음과 열정</i>
                        에 있습니다.
                    </p>
                    
                    <br><br>
                    
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
                    
                    <br><br>
                    
                    <!-- 게시판 리스트 -->
                    <div class="table-wrap board-list">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>분류</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>등록일</th>
                                    <th>조회수</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>제작문의</td>
                                    <td class="subject"><a href="#">CARP특공대! 세상으로 총 진군하자! CARP특공대! 세상으로 총 진군하자!</a></td>
                                    <td>관리자</td>
                                    <td>2017-08-05</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td>제작문의</td>
                                    <td class="subject"><a href="#">CARP특공대! 세상으로 총 진군하자!</a></td>
                                    <td>관리자</td>
                                    <td>2017-08-05</td>
                                    <td>27</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <br><br>
                    
                    <!-- 게시판 쓰기 -->
                    <div class="table-wrap board-write">
                        <form action="#">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>작성자</th>
                                        <td><p class="u-id">작성자id**</p></td>
                                    </tr>
                                    <tr>
                                        <th>연락처</th>
                                        <td class="phone">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>010</option>
                                                    <option>011</option>
                                                    <option>017</option>
                                                    <option>018</option>
                                                    <option>016</option>
                                                </select> -
                                                <input type="text" id="phone-2" class="form-control"> -
                                                <label for="phone-2" class="sr-only">연락처</label>
                                                <input type="text" id="phone-3" class="form-control">
                                                <label for="phone-3" class="sr-only">연락처</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-mail">이메일</label></th>
                                        <td class="mail">
                                            <div class="form-group">
                                                <input type="email" id="u-mail" class="form-control">
                                                @
                                                <label for="domail" class="sr-only">도메인</label>
                                                <input type="text" id="domail" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>공개여부</th>
                                        <td class="disclose">
                                            <div class="form-group">
                                                <label>
                                                    <input type="radio"> 공개
                                                </label>
                                                <label>
                                                    <input type="radio"> 비공개
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="subject">제목</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>구분</th>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>선택하세요</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="content"><label for="u-content">내용</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>파일첨부</th>
                                        <td class="file">
                                            <div class="form-group">
                                                <input type="file" id="file" class="form-control">
                                                <label for="file">파일첨부</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    
                    <br><br>
                    
                    <!-- 게시판 뷰 -->
                    <article class="board-view">
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
                        
                        <br><br>
                        
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
                            </ul>
                        </div>
                    </article>
                    
                    <br><br>
                    
                    <!-- paging -->
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-xs btn-org" role="button">글쓰기</a>
                            <a href="#" class="btn btn-xs btn-gray" role="button">수정하기</a>
                            <a href="#" class="btn btn-xs btn-gray" role="button">삭제하기</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-lg btn-aqua" role="button">목록</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-sm btn-aqua" role="button">다음</a>
                            <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                        </p>
                    </div>
                    
                    <br><br>
                    
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
            </div>
        </section>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
