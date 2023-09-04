<?php
if(!defined('_BLUEVATION_')) exit;

if(defined('_INDEX_')) { // index에서만 실행
	include_once(BV_LIB_PATH.'/popup.inc.php'); // 팝업레이어
}
?>

<div id="wrapper">
  <header class="header black">
    <div class="hd-wr">
      <a href="/" class="hd-logo">
        <img src="/source/img/logo_black.png" alt="날갬" class="hd-black">
        <img src="/source/img/logo_white.png" alt="날갬" class="hd-white">
      </a>
      <div class="hd-menu">
        <div class="gnb-tnb-wr">
          <ul class="hd-gnb-ul">
            <li class="hd-gnb-li">
              <a href="">날갬 TOUR</a>
            </li>
            <li class="hd-gnb-li">
              <a href="">날갬 with 카페</a>
            </li>
            <li class="hd-gnb-li">
              <a href="">내 위치 검색</a>
            </li>
            <li class="hd-gnb-li">
              <a href="">소통해요 날갬</a>
            </li>
          </ul>
          <ul class="hd-tnb-ul">
            <li class="hd-tnb-li hd-tnb-li--sch">
              <button type="button" class="hd-sch-open"><img src="/source/img/icon-search_black.png" alt="검색"></button>
              <form action="" class="hd-sch-form">
                <input type="text" class="hd-sch" placeholder="여행지 또는 궁금하신 정보를 입력해주세요.">
                <button type="submit" class="hd-sch-btn"><img src="/source/img/icon-search_sky.png" alt="검색"></button>
              </form>
            </li>
            <li class="hd-tnb-li hd-tnb-li--login">
              <a href=""><img src="/source/img/icon-login_black.png" alt="" class="hd-black"><img
                  src="/source/img/icon-login_white.png" alt="" class="hd-white">로그인</a>
            </li>
            <li class="hd-tnb-li hd-tnb-li--lang">
              <button type="button" class="hd-lang-btn"><img src="/source/img/icon-lang_black.png" alt=""
                  class="hd-black hd-lang-img"><img src="/source/img/icon-lang_white.png" alt=""
                  class="hd-white hd-lang-img">KOR<img src="/source/img/icon-arrowlang_black.png" alt=""
                  class="hd-black hd-langarrow-img"><img src="/source/img/icon-arrowlang_white.png" alt=""
                  class="hd-white hd-langarrow-img"></button>
              <ul class="hd-lang-ul">
                <li class="hd-lang-li">
                  <a href="">ENG</a>
                </li>
                <li class="hd-lang-li">
                  <a href="">CHN</a>
                </li>
                <li class="hd-lang-li">
                  <a href="">JPN</a>
                </li>
              </ul>
              <!-- 구글 언어 선택 셀렉트박스 삭제 -->
              <!-- <div id="google_translate_element"></div>
              <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({
                    pageLanguage: 'ko',
                    autoDisplay: false
                  }, 'google_translate_element');
                }
              </script> -->
            </li>
            <li class="hd-tnb-li hd-tnb-li--store">
              <a href="">입점 신청<img src="/source/img/icon-link.png" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
      <button type="button" class="hd-ham"></button>
    </div>
  </header>


  <div id="container">
    <?php
		//if(!is_mobile()) { // 모바일접속이 아닐때만 노출
			//include_once(BV_THEME_PATH.'/quick.skin.php'); // 퀵메뉴
		//}

		//if(!defined('_INDEX_')) { // index가 아니면 실행
			//echo '<div class="cont_inner">'.PHP_EOL;
		//}
		?>