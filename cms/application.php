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
        <div class="application">
            <div class="container">
                <section class="receiving-company">
                    <div class="section-header">
                        <h4 class="title">수납업체 및 목적<small>수납업체 기재란</small></h4>
                    </div>
                    <div class="section-content">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>수납업체</th>
                                        <td>한국대학원리연구회</td>
                                    </tr>
                                    <tr>
                                        <th>수납 목적</th>
                                        <td>후원금</td>
                                    </tr>
                                    <tr>
                                        <th>대표자</th>
                                        <td>문상필</td>
                                    </tr>
                                    <tr>
                                        <th>사업자등록번호</th>
                                        <td>101-82-61247</td>
                                    </tr>
                                    <tr>
                                        <th>주소</th>
                                        <td>서울시 종로구 창경궁로 253-7 (명륜 2가)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <section class="automatic-withdrawal">
                    <div class="section-header">
                        <h4 class="title">자동이체 신청내용<small>신청고객기재란</small></h4>
                    </div>
                    <div class="section-content">
                        <form action="#">
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th><label for="applicant">신청인</label></th>
                                            <td class="applicant">
                                                <div class="form-group">
                                                    <input type="text" id="applicant" class="form-control">
                                                    <label>예금주와 관계 : (<input type="text">)</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-contact">연락처</label></th>
                                            <td class="contact">
                                                <div class="form-group">
                                                    <input type="text" id="u-contact" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">납부금액</th>
                                            <td class="amount-paid">
                                                <div class="form-group">
                                                    <label>
                                                        <input type="checkbox">
                                                        고정금액
                                                    </label>
                                                    <label>
                                                        (<input type="text">원)
                                                    </label>
                                                    <label>
                                                        <input type="checkbox">
                                                        변동(추가 계약내용에 따름)
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">납부일</th>
                                            <td class="date-payment">
                                                <div class="form-group">
                                                    <label>
                                                        매월 <input type="text" class="form-control"> 일
                                                    </label>
                                                    <label>
                                                        *미납시 <input type="text" class="form-control"> 일,
                                                    </label>
                                                    <label>
                                                        <input type="text" class="form-control"> 일 재출금
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">납부방법</th>
                                            <td class="method-payment">
                                                <div class="form-group">
                                                    <label><input type="checkbox"> CMS (계좌자동결제)</label>
                                                    <label><input type="checkbox"> 신용카드</label>
                                                    <label><input type="checkbox"> 휴대전화</label>
                                                    <label><input type="checkbox"> 유선전화</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="settlement-mechanism">결제사명</label>
                                                <small>(은행,카드사,통신사명)</small>
                                            </th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="settlement-mechanism" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-depositor">결제자명</label></th>
                                            <td class="depositor">
                                                <div class="form-group">
                                                    <input type="text" id="u-depositor" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="payment-number">결제번호</label>
                                                <small>(계좌/카드/유무선번호)</small>
                                            </th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="payment-number" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="i-birthday">생년월일</label>
                                                <small>(또는 사업자등록번호)</small>
                                            </th>
                                            <td class="birthday">
                                                <div class="form-group">
                                                    <input type="text" id="i-birthday" class="form-control">
                                                    <p class="attention">휴대폰결제 시 주민등록번호 기재 CMS, 카드는 생년월일</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>결제자<br> 휴대전화번호</th>
                                            <td class="phone">
                                                <div class="form-group">
                                                    <input type="text" id="u-phone1" class="form-control"> - 
                                                    <label for="u-phone1" class="sr-only">휴대폰번호</label>
                                                    <input type="text" id="u-phone2" class="form-control"> - 
                                                    <label for="u-phone2" class="sr-only">휴대폰번호</label>
                                                    <input type="text" id="u-phone3" class="form-control">
                                                    <label for="u-phone3" class="sr-only">휴대폰번호</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">개인정보 수집 및<br class="visible-md visible-lg"> 이용동의</th>
                                            <td class="agreement agreement">
                                                <h5 class="square-title">◇ 개인정보 수집 및 이용동의 ◇</h5>
                                                <dl>
                                                    <dt>수집 및 이용목적</dt>
                                                    <dd>효성CMS  자동이체를 통한 요금 수납</dd>
                                                    <dt>수집항목</dt>
                                                    <dd class="space">
                                                        (개인정보) 성명, 생년월일, 연락처, 결제사명, 결제자명, 계좌번호, 카드번호, 유효기간, 휴대/유선전화번호 (고유식별정보) 주민등록번호, 단 휴대/유선전화 결제에 한함 (고유식별정보 처리: &nbsp;<label>동의함 <input type="checkbox"></label> <label> 동의하지 않음 <input type="checkbox"></label> )
                                                    </dd>
                                                </dl>
                                                <p>보유 및 이용기간 : 수집/이용 동의일부터 자동이체 종료일(해지일)까지</p>
                                                <span>신청자는 개인정보의 수집 및 이용을 거부할 수 있습니다. 단, 거부 시 자동이체 신청이 처리되지 않습니다.</span>
                                                <div class="form-group">
                                                    <label>동의함 <input type="checkbox"></label>
                                                    <label>동의하지 않음 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="v-top agreement">개인정보 제3자<br class="visible-md visible-lg"> 제공동의</th>
                                            <td class="agreement">
                                                <h5 class="square-title">◇ 개인정보 제3자 제공 동의 ◇</h5>
                                                <p>
                                                    개인정보를 제공받는 자: 효성에프엠에스㈜, 금융기관(하단 신청가능은행 참조), 통신사(SKT, KT LGU+, CJ헬로비전), 카드사(BC, 국민, 외환, 삼성, 신한, 롯데, 하나SK, 현대 등),결제대행사(KG이니시스, KCP)      등,  자세한 내용은 홈페이지 게시 ( www.efnc.co.kr / 제휴사 소개 메뉴 내 )
                                                </p>
                                                <p>
                                                    개인정보를 제공받는 자의 이용 목적: 자동이체서비스 제공 및 자동이체 동의 사실 통지
                                                </p>
                                                <p>
                                                    제공하는 개인정보의 항목<br>
                                                    (개인정보) 성명, 생년월일, 연락처, 결제사명, 결제자명, 계좌번호, 카드번호, 유효기간, 휴대/유선전화번호 (고유식별정보) 주민등록번호, 단 휴대/유선전화결제에 한함.
                                                </p>
                                                <p>
                                                    개인정보를 제공받는자의 개인정보 보유 및 이용기간: 동의일부터 자동이체의 종료일(해지일)까지. 단, 관계 법령에 의거 일정기간 동안 보관
                                                </p>
                                                <p>
                                                    신청자는 개인정보에 대해 수납업체가 제 3자에 제공하는 것을 거부할 수 있습니다. 단, 거부 시 자동이체 신청이 처리되지 않습니다
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <strong>
                                    신청인(예금주)은 신청정보, 금융거래정보등 개인정보의 수집·이용 및 제 3자 제공에 동의하며
                                    <br class="hidden-xs">
                                    상기와 같이 효성CMS 자동이체를 신청합니다. 
                                </strong>
                                <div class="signature">
                                    <p class="date">
                                        201<span class="year">년</span>
                                        <span class="month">월</span>
                                        <span class="day">일</span>
                                    </p>
                                    <dl>
                                        <dt>신청인</dt>
                                        <dd>(인) 또는 서명</dd>
                                    </dl>
                                    <dl>
                                        <dt><span class="hidden-xs">(신청인과 결제인이 다를 경우)</span> 결제인</dt>
                                        <dd>(인) 또는 서명</dd>
                                    </dl>
                                    <small class="note visible-xs">(신청인과 결제인이 다를 경우)</small>
                                </div>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                                    <button type="submit" class="btn btn-sm btn-aqua">확인</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </section>
                <ol class="decimal-list">
                    <li>신청인과 결제인이 다른 경우 반드시 결제인의 별도 서명을 받아야 하며 인감 또는 서명은 출금통장의 사용인감 또는 서명을 사용해야 합니다. </li>
                    <li>기존 신청내용을 변경하고자 하는 경우에는 자동이체신청서를 신규로 작성하셔야 합니다. </li>
                    <li>신청가능은행 : 국민, 우리, 신한, 농협, 하나, SC, 기업, 외환, 씨티, 산업, 새마을, 부산, 대구, 경남, 광주, 전북, 제주, 수협, 신협, 우체국, 동양증권, 삼성증권</li>
                    <li>신청가능통신사 및 카드사 : 국내외 전 카드사 이용가능. 단, 선불카드, 공무원복지카드, 무기명법인카드는 사용 불가 / SKT, KT, LGU+, CJ헬로비전</li>
                </ol>
            </div>
        </div>
	</main>
	
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>
