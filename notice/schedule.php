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
                <h3 class="page-title">일정게시판</h3>
            </div>
        </div>
        <div class="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <article class="calendar">
                            <div class="calendar-header">
                                <div class="calendar-btn">
                                    <a href="#" class="last-month" role="button">
                                        <i class="icon-left-open"><span class="sr-only">이전달</span></i>
                                    </a>
                                    <a href="#" class="next-month" role="button">
                                        <i class="icon-right-open"><span class="sr-only">다음달</span></i>
                                    </a>
                                </div>
                                <h4><i class="icon-calendar"></i><span class="year">2017</span><span class="month">08</span></h4>
                            </div>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="sunday">일</th>
                                            <th>월</th>
                                            <th>화</th>
                                            <th>수</th>
                                            <th>목</th>
                                            <th>금</th>
                                            <th>토</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><a href="#">1</a></td>
                                            <td><a href="#">2</a></td>
                                            <td class="scheduled"><a href="#">3</a></td>
                                            <td><a href="#">4</a></td>
                                            <td><a href="#">5</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">6</a></td>
                                            <td><a href="#">7</a></td>
                                            <td class="scheduled"><a href="#">8</a></td>
                                            <td><a href="#">9</a></td>
                                            <td><a href="#">10</a></td>
                                            <td><a href="#">11</a></td>
                                            <td><a href="#">12</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">13</a></td>
                                            <td><a href="#">14</a></td>
                                            <td><a href="#">15</a></td>
                                            <td><a href="#">16</a></td>
                                            <td><a href="#">17</a></td>
                                            <td><a href="#">18</a></td>
                                            <td class="scheduled"><a href="#">19</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">20</a></td>
                                            <td><a href="#">21</a></td>
                                            <td><a href="#">22</a></td>
                                            <td><a href="#">23</a></td>
                                            <td><a href="#">24</a></td>
                                            <td class="scheduled"><a href="#">25</a></td>
                                            <td><a href="#">26</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">27</a></td>
                                            <td class="scheduled"><a href="#">28</a></td>
                                            <td><a href="#">29</a></td>
                                            <td><a href="#">30</a></td>
                                            <td><a href="#">31</a></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <ul class="schedule-list">
                            <li>
                                <span class="date">
                                    <span class="month">08</span>
                                    <b class="day">03</b>
                                </span>
                                <p class="details">일정내용입력 눌렀을때 그 날에 있는 일정이 노출 됩니다</p>
                            </li>
                            <li>
                                <span class="date">
                                    <span class="month">08</span>
                                    <b class="day">08</b>
                                </span>
                                <p class="details">일정내용입력 눌렀을때 그 날에 있는 일정이 노출 됩니다</p>
                            </li>
                            <li>
                                <span class="date">
                                    <span class="month">08</span>
                                    <b class="day">19</b>
                                </span>
                                <p class="details">일정내용입력 눌렀을때 그 날에 있는 일정이 노출 됩니다</p>
                            </li>
                            <li>
                                <span class="date">
                                    <span class="month">08</span>
                                    <b class="day">25</b>
                                </span>
                                <p class="details">일정내용입력 눌렀을때 그 날에 있는 일정이 노출 됩니다</p>
                            </li>
                            <li>
                                <span class="date">
                                    <span class="month">08</span>
                                    <b class="day">28</b>
                                </span>
                                <p class="details">일정내용입력 눌렀을때 그 날에 있는 일정이 노출 됩니다</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
