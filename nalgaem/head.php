<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<header class="header black">
  <div class="hd-wr">
    <a href="<?php echo G5_URL ?>" class="hd-logo">
      <img src="/source/img/logo_black.png" alt="날갬" class="hd-black">
      <img src="/source/img/logo_white.png" alt="날갬" class="hd-white">
    </a>
    <div class="hd-menu">
      <div class="gnb-tnb-wr">
        <ul class="hd-gnb-ul">
          <li class="hd-gnb-li">
            <a href="/sub/tour_main.html">날갬 TOUR</a>
            <ul class="hd-gnb2-ul">
              <li class="hd-gnb2-li">
                <a href="/sub/tour_sight.html">관광지</a>
              </li>
              <li class="hd-gnb2-li">
                <a href="">축제</a>
              </li>
              <li class="hd-gnb2-li">
                <a href="">공연</a>
              </li>
              <li class="hd-gnb2-li">
                <a href="">행사</a>
              </li>
            </ul>
          </li>
          <li class="hd-gnb-li">
            <a href="/sub/cafe_main.html">날갬 with 카페</a>
          </li>
          <li class="hd-gnb-li">
            <a href="/sub/location.html">내 위치 검색</a>
          </li>
          <li class="hd-gnb-li">
            <a href="/sub/notice_list.html">소통해요 날갬</a>
            <ul class="hd-gnb2-ul">
              <li class="hd-gnb2-li">
                <a href="/sub/notice_list.html">공지사항</a>
              </li>
              <li class="hd-gnb2-li">
                <a href="/sub/event_list.html">이벤트</a>
              </li>
              <li class="hd-gnb2-li">
                <a href="/sub/faq.html">FAQ</a>
              </li>
            </ul>
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
            <!-- 회원일때 -->
            <a href="javascript:void(0);" class="gotoMypage"><img src="/source/img/icon-login_black.png" alt=""
                class="hd-black"><img src="/source/img/icon-login_white.png" alt="" class="hd-white">홍길동님</a>
            <ul class="hd-my-ul tnb-ul">
              <li class="hd-my-li tnb-li">
                <a href="/mypage/mypage_main.html">나의정보</a>
              </li>
              <li class="hd-my-li tnb-li">
                <a href="/mypage/mypage_bookmark.html">관심목록</a>
              </li>
              <li class="hd-my-li tnb-li">
                <a href="/mypage/mypage_order.html">주문내역</a>
              </li>
              <li class="hd-my-li tnb-li">
                <a href="/mypagae/mypage_inquiry_list.html">문의내역</a>
              </li>
              <li class="hd-my-li tnb-li">
                <a href="">로그아웃</a>
              </li>
            </ul>
            <!-- 비회원일때 -->
            <!-- <a href=""><img src="/source/img/icon-login_black.png" alt="" class="hd-black"><img src="/source/img/icon-login_white.png" alt="" class="hd-white">로그인</a> -->
          </li>
          <li class="hd-tnb-li hd-tnb-li--lang">
            <button type="button" class="hd-lang-btn"><img src="/source/img/icon-lang_black.png" alt=""
                class="hd-black hd-lang-img"><img src="/source/img/icon-lang_white.png" alt=""
                class="hd-white hd-lang-img">KOR<img src="/source/img/icon-arrowlang_black.png" alt=""
                class="hd-black hd-langarrow-img"><img src="/source/img/icon-arrowlang_white.png" alt=""
                class="hd-white hd-langarrow-img"></button>
            <ul class="hd-lang-ul tnb-ul">
              <li class="hd-lang-li tnb-li">
                <a href="">ENG</a>
              </li>
              <li class="hd-lang-li tnb-li">
                <a href="">CHN</a>
              </li>
              <li class="hd-lang-li tnb-li">
                <a href="">JPN</a>
              </li>
            </ul>
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
