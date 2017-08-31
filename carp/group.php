<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/carp.css" rel="stylesheet">
</head>
<body class="carp"> <!-- Class 폴더 -->
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
   
    <!-- Content Start -->
	<main id="content" class="group">
        <!-- Page-Header -->
        <div class="page-header">
            <h2 class="header-title">CARP</h2>
            <div class="container">
                <h3 class="page-title">조직도</h3>
            </div>
        </div>
        
        <article>
            <div class="container">
                <figure>
                    <img src="/assets/images/carp/group_xs_img.jpg" class="img-responsive visible-xs" alt="">
                    <img src="/assets/images/carp/group_sm_img.jpg" class="img-responsive visible-sm visible-md" alt="">
                    <img src="/assets/images/carp/group_lg_img.jpg" class="img-responsive visible-lg" alt="">
                    <figcaption class="sr-only">
                        <ol>
                            <li><h1>회장</h1></li>
                            <li>
                                <h2>학군</h2>
                                <ul>
                                    <li>학사</li>
                                    <li>campus 지회</li>
                                    <li>동아리</li>
                                </ul>
                            </li>
                            <li>
                                <h2>중앙사무국</h2>
                                <ul>
                                    <li>행정지원팀</li>
                                    <li>선교지원팀</li>
                                    <li>중앙학생회</li>
                                </ul>
                            </li>
                            <li>
                                <h2>지도자 양성기관</h2>
                                <ul>
                                    <li>천일국청년선교단</li>
                                    <li>대학순회전도단</li>
                                    <li>수생</li>
                                </ul>
                            </li>
                        </ol>
                    </figcaption>
                </figure>
            </div>
        </article>
        
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
