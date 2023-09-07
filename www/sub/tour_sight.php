<?php
include_once('./_common.php');
include_once(BV_PATH.'/head.php'); // 상단
include_once(BV_PATH.'/include/tour_category.php');
include_once(BV_PATH.'/include/sub_visual.php');
?>

<a href="" class="quick-banner quick-cafe">
  <img src="/source/img/img-cafe_quick.png" alt="날갬카페">
</a>

<div class="container sub">

  <!-- 서브비주얼 { -->
  <?php subVis('tour'); ?>
  <!-- } 서브비주얼 -->

  <div class="content">

    <div class="wrapper">

      <!-- 투어 분류 { -->
      <?php tourCategory(1); ?>
      <!-- } 투어 분류 -->

      <div class="region-sl-wr">
        <div class="region-slider swiper">
          <div class="swiper-wrapper">
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/17/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/18/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/19/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/20/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
            <div class="region-slide swiper-slide">
              <a href="" class="region-sl-link">
                <div class="region-sl-img">
                  <img src="https://picsum.photos/id/16/100/100" alt="">
                </div>
                <p class="region-sl-txt">
                  서울
                </p>
              </a>
            </div>
          </div>
        </div>
        <div class="region-sl-ctr">
          <button type="button" class="circle-arrow region-arrow prev"><span class="sound_only">이전
              슬라이드</span></button>
          <button type="button" class="circle-arrow region-arrow next"><span class="sound_only">다음
              슬라이드</span></button>
        </div>
      </div>

      <div class="sub-sch-wr">
        <form action="" class="sub-sch-in">
          <input type="text" class="sub-sch-input" placeholder="검색어를 입력해주세요.">
          <button type="submit" class="sub-sch-btn"></button>
        </form>
      </div>

      <div class="sub-main-wr">
        <div class="sub-main-tit-wr">
          <p class="sub-main-tit"># 관광지</p>
          <ul class="sub-list-order-ul">
            <li class="sub-list-order-li active">
              <a href="">최신순</a>
            </li>
            <li class="sub-list-order-li">
              <a href="">추천순</a>
            </li>
            <li class="sub-list-order-li">
              <a href="">인기순</a>
            </li>
          </ul>
        </div>

        <ul class="sub-card-ul place-card-ul">
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
          <li class="sub-card-li place-card-li">
            <a href="" class="place-sl-inner">
              <div class="place-sl-img"><img src="https://picsum.photos/id/25/500/700" alt=""></div>
              <div class="place-sl-info-wr">
                <div class="place-sl-condition">쾌적</div>
                <div class="place-sl-weather-wr">
                  <div class="place-sl-temperature">28˚</div>
                  <div class="place-sl-sky-wr">
                    <p>현재날씨</p>
                    <p class="place-sl-sky">맑음</p>
                  </div>
                </div>
                <div class="place-sl-name">[대전] 장태산 스카이워크</div>
              </div>
              <div class="place-sl-field">
                관광
              </div>
              <div class="card-icon-wr">
                <div class="place-sl-mark-wr">
                  <div class="place-sl-mark place-sl-mark--pop">
                    인기
                  </div>
                  <div class="place-sl-mark place-sl-mark--rec">
                    추천
                  </div>
                </div>
                <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                    class="sound_only">즐겨찾기</span></button>
              </div>
            </a>
          </li>
        </ul>

        <!-- paging { -->
        <div class="sub-paging-wr">
          <ul class="sub-paging-ul">
            <li class="sub-paging-li circle start">
              <a href="">
                <img src="/source/img/icon-paging_start.png" alt="처음">
              </a>
            </li>
            <li class="sub-paging-li circle prev">
              <a href="">
                <img src="/source/img/icon-cal_prev.png" alt="이전">
              </a>
            </li>
            <li class="sub-paging-li active">
              <a href=""><span>1</span></a>
            </li>
            <li class="sub-paging-li">
              <a href=""><span>2</span></a>
            </li>
            <li class="sub-paging-li">
              <a href=""><span>3</span></a>
            </li>
            <li class="sub-paging-li">
              <a href=""><span>4</span></a>
            </li>
            <li class="sub-paging-li">
              <a href=""><span>5</span></a>
            </li>
            <li class="sub-paging-li circle next">
              <a href="">
                <img src="/source/img/icon-cal_next.png" alt="다음">
              </a>
            </li>
            <li class="sub-paging-li circle end">
              <a href="">
                <img src="/source/img/icon-paging_end.png" alt="맨끝">
              </a>
            </li>
          </ul>
        </div>
        <!-- } paging -->
      </div>
    </div>

  </div>

</div>