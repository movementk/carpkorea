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
                                            <td>1</td>
                                            <td>2</td>
                                            <td class="scheduled">3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>7</td>
                                            <td class="scheduled">8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td class="scheduled">19</td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td class="scheduled">25</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td class="scheduled">28</td>
                                            <td>29</td>
                                            <td>30</td>
                                            <td>31</td>
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
                                <h5>한국대학원리연구회 일정1</h5>
                                <p class="details">일정내용입력 눌렀을때 그 날에 있는 일정이 노출 됩니다</p>
                            </li>
                            <li>
                                <span class="date">
                                    <span class="month">08</span>
                                    <b class="day">08</b>
                                </span>
                                <h5>한국대학원리연구회 일정1</h5>
                                <p class="details">일정내용입력 눌렀을때 그 날에 있는 일정이 노출 됩니다</p>
                            </li>
                            <li>
                                <span class="date">
                                    <span class="month">08</span>
                                    <b class="day">19</b>
                                </span>
                                <h5>한국대학원리연구회 일정1</h5>
                                <p class="details">일정내용입력 눌렀을때 그 날에 있는 일정이 노출 됩니다</p>
                            </li>
                            <li>
                                <span class="date">
                                    <span class="month">08</span>
                                    <b class="day">25</b>
                                </span>
                                <h5>한국대학원리연구회 일정1</h5>
                                <p class="details">일정내용입력 눌렀을때 그 날에 있는 일정이 노출 됩니다</p>
                            </li>
                            <li>
                                <span class="date">
                                    <span class="month">08</span>
                                    <b class="day">28</b>
                                </span>
                                <h5>한국대학원리연구회 일정1</h5>
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
