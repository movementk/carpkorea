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
                <h3 class="page-title">CMS 소식</h3>
            </div>
        </div>
        <article class="application-upload">
            <div class="container">
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
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-sm btn-aqua">확인</button>
                                <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </article>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
