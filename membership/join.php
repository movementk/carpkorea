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
        <div class="join">
            <div class="container">
                <ol class="step-list">
                    <li>
                        <p class="figure">
                            <img src="/assets/images/membership/step_xs_img01.png" alt="step01">
                        </p>
                        <p class="details"><i>Step01</i><br class="visible-xs"> 약관동의</p>
                    </li>
                    <li class="active">
                        <p class="figure">
                            <img src="/assets/images/membership/step_xs_img02_active.png" class="visible-xs" alt="step02">
                            <img src="/assets/images/membership/step_lg_img02_active.png" class="hidden-xs" alt="step02">
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
                
                <article class="join-form">
                    <p class="vitally">표시는 필수입력입니다.</p>
                    <form action="#">
                        <div class="table-wrap join-write">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
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
                                        <th><label for="u-id">아이디</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-id" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-pw">비밀번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="u-pw" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="confirm-pw">비밀번호 확인</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="confirm-pw" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>전화번호</th>
                                        <td class="phone">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>02</option>
                                                    <option>031</option>
                                                </select> -
                                                <input type="text" id="tel-2" class="form-control"> -
                                                <label for="tel-2" class="sr-only">연락처</label>
                                                <input type="text" id="tel-3" class="form-control">
                                                <label for="tel-3" class="sr-only">연락처</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>휴대폰번호</th>
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
                                        <th><label for="u-addr">주소</label></th>
                                        <td class="addr">
                                            <div class="form-group">
                                                <input type="text" id="u-addr" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-sm btn-aqua">다음</button>
                                <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                            </p>
                        </div>
                    </form>
                </article>
                
            </div>
        </div>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
