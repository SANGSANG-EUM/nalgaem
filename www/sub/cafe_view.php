<?php
include_once('./_common.php');
include_once(BV_PATH.'/head.php'); // 상단
include_once(BV_PATH.'/include/tour_category.php');
include_once(BV_PATH.'/include/sub_visual.php');
?>

<div class="container sub">

  <div class="content">

    <div class="nalgaem-view">

      <!-- 상세페이지 제목 + 정보 { -->
      <div class="subwr">
        <div class="nalgaem-view-top">
          <div class="nalgaem-view-tit-wr">
            <p class="nalgaem-view-tit"># 카페 이름이 들어갈 자리입니다</p>
            <p class="nalgaem-view-addr"><img src="/source/img/icon-location.png" alt="">대전광역시 서구</p>
          </div>
          <div class="nalgaem-view-top-info">
            <div class="cafe-sl-hash-wr">
              <span class="cafe-sl-hash"># 감성있는</span>
              <span class="cafe-sl-hash"># 감성있는</span>
              <span class="cafe-sl-hash"># 감성있는</span>
              <span class="cafe-sl-hash"># 감성있는</span>
              <span class="cafe-sl-hash"># 감성있는</span>
            </div>
            <ul class="nalgaem-view-top-ul">
              <li class="nalgaem-view-top-li call">
                <a href="" class="nalgaem-view-call"><img src="/source/img/icon-call.png" alt="">매장연결</a>
              </li>
              <li class="nalgaem-view-top-li bookmark">
                <p class="nalgaem-view-bookmark"><img src="/source/img/icon-star_gray.png" alt="">찜하기<span>30</span></p>
              </li>
              <li class="nalgaem-view-top-li share">
                <p class="nalgaem-view-share"><img src="/source/img/icon-share.png" alt="">공유하기</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- } 상세페이지 제목 + 정보 -->

      <!-- 썸네일 슬라이드 { -->
      <div class="nalgaem-view-slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide nalgaem-view-slide">
            <div class="nalgaem-view-slide-in">
              <img src="https://picsum.photos/id/30/800/500" alt="">
            </div>
          </div>
          <div class="swiper-slide nalgaem-view-slide">
            <div class="nalgaem-view-slide-in">
              <img src="https://picsum.photos/id/31/800/500" alt="">
            </div>
          </div>
          <div class="swiper-slide nalgaem-view-slide">
            <div class="nalgaem-view-slide-in">
              <img src="https://picsum.photos/id/32/800/500" alt="">
            </div>
          </div>
          <div class="swiper-slide nalgaem-view-slide">
            <div class="nalgaem-view-slide-in">
              <img src="https://picsum.photos/id/33/800/500" alt="">
            </div>
          </div>
        </div>
        <div class="main-sl-ctr-wr view-sl-ctr-wr">
          <button type="button" class="main-arrow view-arrow prev"><span class="sound_only">이전
              슬라이드</span></button>
          <div class="main-sl-in-wr">
            <div class="main-sl-fr-wr view-sl-fr-wr">
            </div>
            <button type="button" type="button" class="main-sl-btn view-sl-btn pause" title="썸네일 슬라이드 멈춤"></button>
          </div>
          <button type="button" class="main-arrow view-arrow next"><span class="sound_only">다음
              슬라이드</span></button>
        </div>
      </div>
      <!-- } 썸네일 슬라이드 -->

      <!-- 상세정보 { -->
      <div class="subwr">
        <div class="nalgaem-view-content nalgaem-view-content--info">
          <h5>상세정보</h5>
          <ul class="nalgaem-view-content-ul">
            <li class="nalgaem-view-content-li">
              <div class="nalgaem-view-content-type text">
                <div class="nalgaem-view-content-info-l">
                  <span>기본정보</span>
                </div>
                <div class="nalgaem-view-content-info-r">
                  <div class="nalgaem-view-content-txtbox txtbox2">
                    <ul class="nalgaem-view-content-txtbox2-ul">
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#카페 소개</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>카페 소개글</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#영업시간</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>오전 11:00 ~ 오후 21:00</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#전화번호</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>000-000-0000</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#편의시설 정보</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>편의 시설 소개글</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#주소</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>[12345] 주소 기입란 주소 기입란</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="nalgaem-view-content-type map">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1693895800589" class="root_daum_roughmap root_daum_roughmap_landing">
                </div>
                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                  new daum.roughmap.Lander({
                    "timestamp": "1693895800589",
                    "key": "2g4ze",
                  }).render();
                </script>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- } 상세정보 -->

      <!-- 카페메뉴 { -->
      <div class="subwr">
        <div class="nalgaem-view-content nalgaem-view-content--menu">

          <!-- 모바일 메뉴 슬라이드 { -->
            <!-- 슬라이드 대신 스크롤 사용 -->
          <div class="menu-mo-slider swiper">
            <div class="swiper-wrapper">
              <div class="menu-mo-slide swiper-slide">
                <a href="#cafeMenu1">커피</a>
              </div>
              <div class="menu-mo-slide swiper-slide">
                <a href="#cafeMenu2">음료</a>
              </div>
              <div class="menu-mo-slide swiper-slide">
                <a href="#cafeMenu3">디저트</a>
              </div>
              <div class="menu-mo-slide swiper-slide">
                <a href="#cafeMenu4">기타</a>
              </div>
              <div class="menu-mo-slide swiper-slide">
                <a href="#cafeMenu5">기타22</a>
              </div>
            </div>
          </div>
          <!-- } 모바일 메뉴 슬라이드 -->

          <h5>메뉴</h5>
          <ul class="nalgaem-view-content-ul cafe-menuwr-ul match_h">
            <li id="cafeMenu1" class="cafe-menuwr-li anchor">
              <div class="cafe-menu-field">커피</div>
              <ul class="cafe-menu-ul">
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메아아메리노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="cafe-menuwr-li anchor" id="cafeMenu2">
              <div class="cafe-menu-field">음료</div>
              <ul class="cafe-menu-ul">
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메아아메아아메리노아메아아메리노아메리노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="cafe-menuwr-li anchor" id="cafeMenu3">
              <div class="cafe-menu-field">디저트</div>
              <ul class="cafe-menu-ul">
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메아아메리노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>

              </ul>
            </li>
            <li class="cafe-menuwr-li anchor" id="cafeMenu4">
              <div class="cafe-menu-field">기타</div>
              <ul class="cafe-menu-ul">
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메아아메리노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>

              </ul>
            </li>
            <li class="cafe-menuwr-li anchor" id="cafeMenu5">
              <div class="cafe-menu-field">기타22</div>
              <ul class="cafe-menu-ul">
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메리카노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>
                <li class="cafe-menu-li">
                  <div class="cafe-menu-inner">
                    <div class="cafe-menu-img">
                      <img src="https://picsum.photos/id/30/800/500" alt="">
                    </div>
                    <div class="cafe-menu-info-wr">
                      <div class="cafe-menu-info">
                        <p class="cafe-menu-name">아메아아메리노</p>
                        <p class="cafe-menu-price">4,000원</p>
                      </div>
                      <button type="button" class="cafe-pick-btn cafeOptPop"><img src="/source/img/icon-shop.png"
                          alt=""><span>메뉴
                          담기</span></button>
                    </div>
                  </div>
                </li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- } 카페메뉴 -->

      <div class="nalgaem-btn-list-wr">
        <a href="" class="nalgaem-btn-list"><img src="/source/img/icon-list.png" alt="">목록보기</a>
      </div>

    </div>

    <!-- 하단고정바 { -->
    <div class="cafe-fix-bar">
      <!-- default 클래스 : 기본 / select 클래스 : 상품을 1개 이상 담았을 때 -->
      <!-- on 클래스 : 활성화되어 노출되고 있는 부분 -->

      <!-- 메뉴 담기 전 레이아웃 -->
      <div class="cafe-fix-in default">
        <div class="cafe-fix-in-show">
          <div class="subwr">
            <p class="cafe-fix-txt">원하시는 메뉴를 담으신 후<span> 바로 결제하고 픽업</span>하세요!</p>
          </div>
        </div>
      </div>

      <!-- 1개 이상의 메뉴를 담고 나서의 레이아웃 -->
      <div class="cafe-fix-in select on">
        <div class="subwr">
          <!-- <form action=""> -->
          <div class="cafe-fix-opts">
            <p class="cafe-fix-opt-name"># 카페명 표기</p>
            <ul class="cafe-fix-opt-ul">
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">4,500원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
              <li class="cafe-fix-opt-li">
                <div class="cafe-fix-opt-l">
                  <div class="cafe-fix-opt-img">
                    <img src="https://picsum.photos/id/30/800/500" alt="">
                  </div>
                  <div class="cafe-fix-opt-txt">
                    <p class="cafe-fix-opt-prd">아메리카노(ICE)</p>
                    <p class="cafe-fix-opt-sel">선택 옵션 : ICE / R / 1샷 추가</p>
                  </div>
                </div>
                <div class="cafe-fix-opt-r">
                  <div class="cafe-fix-opt-r-btns">
                    <button type="button" id="" class="btn btn-mini white cafeOptPop">옵션변경</button>
                    <div class="cafe-opt-qty-wr">
                      <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
                      <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
                      <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
                    </div>
                  </div>
                  <div class="cafe-opt-price">6,000원</div>
                  <button type="button" class="cafe-opt-del-btn"></button>
                </div>
              </li>
            </ul>
          </div>
          <div class="cafe-fix-in-show">
            <div class="cafe-fix-info-wr">
              <div class="cafe-fix-info-l"># 현재 <b>아메리카노(ICE) 외 1개</b>를 담았습니다.</div>
              <div class="cafe-fix-info-r">
                <div class="cafe-fix-price">
                  총 결제 금액 <span>10,500원</span>
                </div>
                <div class="cafe-fix-btn-wr">
                  <button type="" id="optChg" class="cafe-opt-pop-btn white">옵션 변경</button>
                  <button type="" id="" class="cafe-opt-pop-btn black">바로 결제</button>
                </div>
              </div>
            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>

    </div>
    <!-- } 하단고정바 -->

    <!-- 옵션 선택 팝업 { -->
    <div class="cafe-opt-pop-wr">
      <div class="dim"></div>
      <form action="">
        <div class="cafe-opt-pop">
          <button type="button" class="pop-close-btn"></button>
          <div class="cafe-opt-pop-top">
            <div class="cafe-opt-pop-img">
              <img src="https://picsum.photos/id/30/800/500" alt="">
            </div>
            <div class="cafe-opt-pop-info">
              <p class="cafe-opt-pop-name">아메리카노</p>
              <p class="cafe-opt-pop-txt">메뉴에 대한 간단한 설명이 표기됩니다. 메뉴에 대한 간단한 설명이 표기됩니다. 메뉴에 대한 간단한 설명이 표기됩니다. 메뉴에 대한 간단한
                설명이 표기됩니다.</p>
            </div>
          </div>
          <div class="cafe-opt-pop-ul-wr">
            <ul class="cafe-opt-pop-ul">
              <li class="cafe-opt-pop-li must">
                <p class="cafe-opt-pop-li-txt-wr"><span class="cafe-opt-pop-li-txt">핫 / 아이스 선택</span><span
                    class="cafe-opt-icon">필수</span></p>
                <ul class="cafe-opt-sel-ul">
                  <li class="cafe-opt-sel-li">
                    <div class="radio-wr">
                      <input type="radio" name="cafeOpt1" id="cafeOpt1-1">
                      <label for="cafeOpt1-1">HOT</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">0</span>원</p>
                  </li>
                  <li class="cafe-opt-sel-li">
                    <div class="radio-wr">
                      <input type="radio" name="cafeOpt1" id="cafeOpt1-2">
                      <label for="cafeOpt1-2">ICE</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">0</span>원</p>
                  </li>
                </ul>
              </li>
              <li class="cafe-opt-pop-li optional">
                <p class="cafe-opt-pop-li-txt-wr"><span class="cafe-opt-pop-li-txt">샷 추가 선택</span><span
                    class="cafe-opt-icon">선택</span></p>
                <ul class="cafe-opt-sel-ul">
                  <li class="cafe-opt-sel-li">
                    <div class="check-wr">
                      <input type="checkbox" name="" id="cafeOpt2-2">
                      <label for="cafeOpt2-2">1샷 추가</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">500</span>원</p>
                  </li>
                  <li class="cafe-opt-sel-li">
                    <div class="check-wr">
                      <input type="checkbox" name="" id="cafeOpt2-3">
                      <label for="cafeOpt2-3">2샷 추가</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">1000</span>원</p>
                  </li>
                  <li class="cafe-opt-sel-li">
                    <div class="check-wr">
                      <input type="checkbox" name="" id="cafeOpt2-4">
                      <label for="cafeOpt2-4">3샷 추가</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">1500</span>원</p>
                  </li>
                </ul>
              </li>
              <li class="cafe-opt-pop-li must">
                <p class="cafe-opt-pop-li-txt-wr"><span class="cafe-opt-pop-li-txt">핫 / 아이스 선택</span><span
                    class="cafe-opt-icon">필수</span></p>
                <ul class="cafe-opt-sel-ul">
                  <li class="cafe-opt-sel-li">
                    <div class="radio-wr">
                      <input type="radio" name="cafeOpt1" id="cafeOpt1-1">
                      <label for="cafeOpt1-1">HOT</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">0</span>원</p>
                  </li>
                  <li class="cafe-opt-sel-li">
                    <div class="radio-wr">
                      <input type="radio" name="cafeOpt1" id="cafeOpt1-2">
                      <label for="cafeOpt1-2">ICE</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">0</span>원</p>
                  </li>
                </ul>
              </li>
              <li class="cafe-opt-pop-li optional">
                <p class="cafe-opt-pop-li-txt-wr"><span class="cafe-opt-pop-li-txt">샷 추가 선택</span><span
                    class="cafe-opt-icon">선택</span></p>
                <ul class="cafe-opt-sel-ul">
                  <li class="cafe-opt-sel-li">
                    <div class="check-wr">
                      <input type="checkbox" name="" id="cafeOpt2-2">
                      <label for="cafeOpt2-2">1샷 추가</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">500</span>원</p>
                  </li>
                  <li class="cafe-opt-sel-li">
                    <div class="check-wr">
                      <input type="checkbox" name="" id="cafeOpt2-3">
                      <label for="cafeOpt2-3">2샷 추가</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">1000</span>원</p>
                  </li>
                  <li class="cafe-opt-sel-li">
                    <div class="check-wr">
                      <input type="checkbox" name="" id="cafeOpt2-4">
                      <label for="cafeOpt2-4">3샷 추가</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">1500</span>원</p>
                  </li>
                </ul>
              </li>
              <li class="cafe-opt-pop-li must">
                <p class="cafe-opt-pop-li-txt-wr"><span class="cafe-opt-pop-li-txt">핫 / 아이스 선택</span><span
                    class="cafe-opt-icon">필수</span></p>
                <ul class="cafe-opt-sel-ul">
                  <li class="cafe-opt-sel-li">
                    <div class="radio-wr">
                      <input type="radio" name="cafeOpt1" id="cafeOpt1-1">
                      <label for="cafeOpt1-1">HOT</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">0</span>원</p>
                  </li>
                  <li class="cafe-opt-sel-li">
                    <div class="radio-wr">
                      <input type="radio" name="cafeOpt1" id="cafeOpt1-2">
                      <label for="cafeOpt1-2">ICE</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">0</span>원</p>
                  </li>
                </ul>
              </li>
              <li class="cafe-opt-pop-li optional">
                <p class="cafe-opt-pop-li-txt-wr"><span class="cafe-opt-pop-li-txt">샷 추가 선택</span><span
                    class="cafe-opt-icon">선택</span></p>
                <ul class="cafe-opt-sel-ul">
                  <li class="cafe-opt-sel-li">
                    <div class="check-wr">
                      <input type="checkbox" name="" id="cafeOpt2-2">
                      <label for="cafeOpt2-2">1샷 추가</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">500</span>원</p>
                  </li>
                  <li class="cafe-opt-sel-li">
                    <div class="check-wr">
                      <input type="checkbox" name="" id="cafeOpt2-3">
                      <label for="cafeOpt2-3">2샷 추가</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">1000</span>원</p>
                  </li>
                  <li class="cafe-opt-sel-li">
                    <div class="check-wr">
                      <input type="checkbox" name="" id="cafeOpt2-4">
                      <label for="cafeOpt2-4">3샷 추가</label>
                    </div>
                    <p class="cafe-opt-sel-price-wr">+<span class="cafe-opt-sel-price">1500</span>원</p>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="cafe-opt-pop-quantity">
            <p class="cafe-opt-pop-li-txt">수량</p>
            <div class="cafe-opt-qty-wr">
              <button type="button" class="cafe-opt-qty-btn minus" title="수량감소"></button>
              <input type="text" name="" id="cafe-opt-qty-input" value="1" class="cafe-opt-qty-input" readonly>
              <button type="button" class="cafe-opt-qty-btn plus" title="수량증가"></button>
            </div>
          </div>
          <div class="cafe-opt-pop-total-wr">
            <div class="cafe-opt-pop-total">총 금액 <span class="cafe-opt-pop-price">4,500원</span></div>
            <div class="cafe-opt-pop-btn-wr">

              <!-- 메뉴 담기 버튼 클릭시 -->
              <button type="" id="" class="cafe-opt-pop-btn white">메뉴 담기</button>
              <button type="" id="" class="cafe-opt-pop-btn black">바로 결제</button>

              <!-- 픽스바의 옵션 변경 버튼 클릭시 -->
              <!-- <button type="" id="" class="cafe-opt-pop-btn white">변경 완료</button> -->

            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- } 옵션 선택 팝업 -->

  </div>

</div>

<script>
  // 날갬 카페 상세 팝업
  // 열기
  $('.cafeOptPop').on('click', function () {
    $('.cafe-opt-pop-wr').fadeIn().addClass('open');
    $('body, html').addClass('scroll-lock');
  });

  // 닫기
  $('.pop-close-btn').on('click', function () {
    $('.cafe-opt-pop-wr').fadeOut().removeClass('open');
    $('body, html').removeClass('scroll-lock');
  });

  // 마이너스 버튼 클릭 시
  $(".cafe-opt-qty-btn.minus").on("click", function () {
    var currentValue = parseInt($("#cafe-opt-qty-input").val());
    if (currentValue > 1) {
      $("#cafe-opt-qty-input").val(currentValue - 1);
    } else if (currentValue === 1) {
      alert('1개 이상 주문 가능합니다');
    }
  });

  // 플러스 버튼 클릭 시
  $(".cafe-opt-qty-btn.plus").on("click", function () {
    var currentValue = parseInt($("#cafe-opt-qty-input").val());
    if (currentValue < 99) {
      $("#cafe-opt-qty-input").val(currentValue + 1);
    }
  });

  // 날갬 카페 옵션 선택
  $('#optChg').on('click', function () {
    if ($('.cafe-fix-in.select.on').hasClass('open')) {
      $('.cafe-fix-in.select.on').removeClass('open');
      $(this).text('옵션 변경');
      $('body, html').removeClass('scroll-lock');
    } else {
      $('.cafe-fix-in.select.on').addClass('open');
      $(this).text('변경 완료');
      $('body, html').addClass('scroll-lock');
    }
  });

  // 픽스바 하단 고정
  let docHeight = $(document).height();
  let winHeight = $(window).height();

  $(window).scroll(function () {
    if ($(window).width() > 1024) {
      if ($(document).height() - 630 <= $(window).scrollTop() + $(window).height()) {
        $('.cafe-fix-bar').addClass('abs')
      } else {
        $('.cafe-fix-bar').removeClass('abs')
      }
    } else if ($(window).width() > 767) {
      if ($(document).height() - 540 <= $(window).scrollTop() + $(window).height()) {
        $('.cafe-fix-bar').addClass('abs')
      } else {
        $('.cafe-fix-bar').removeClass('abs')
      }
    } else if ($(window).width() > 480) {
      if ($(document).height() - 460 <= $(window).scrollTop() + $(window).height()) {
        $('.cafe-fix-bar').addClass('abs')
      } else {
        $('.cafe-fix-bar').removeClass('abs')
      }
    } else {
      if ($(document).height() - 360 <= $(window).scrollTop() + $(window).height()) {
        $('.cafe-fix-bar').addClass('abs')
      } else {
        $('.cafe-fix-bar').removeClass('abs')
      }
    }

  });


  //상단 탭 고정
  $(window).scroll(function () {

    console.log($(window).scrollTop());
    if ($(window).scrollTop() > 1360) {
      $('.pro_tab').addClass('on');
      $('.pro_cnt_wr').addClass('on');
    } else {
      $('.pro_tab').removeClass('on');
      $('.pro_cnt_wr').removeClass('on');
    }
  });



  if ($(".nalgaem-view-content--menu").length) { //view 페이지 확인
    var menuWr = $(".nalgaem-view-content--menu");
    var menuTop = $(".nalgaem-view-content--menu").offset().top - 90;
    var menuSl = new Swiper(".menu-mo-slider", {
    slidesPerView: 'auto',
    slidesToScroll: 1,
    accessibility: true,
    spaceBetween: 5,
    breakpoints: {
      481: {
        spaceBetween: 10,
      },
    },
  });

    $(window).scroll(function () {
      var s = $(window).scrollTop();

      if (s > menuTop) {
        // $(".menu-mo-slide").addClass("on");
        // $("#cafeMenu1").addClass("on");
        $(".menu-mo-slider").addClass("on");
      } else {
        // $(".menu-mo-slide").removeClass("on");
        // $("#cafeMenu1").removeClass("on");
        $(".menu-mo-slider").removeClass("on");
      }
      menuWr.find(".cafe-menuwr-li").each(function (index) {
        if (s >= $(this).offset().top - 160) {
          menuWr.find(".menu-mo-slide").removeClass("on");
          menuWr.find(".menu-mo-slide:eq(" + index + ")").addClass("on");

          // 추가: 슬라이드 맨 첫 번째로 이동
        menuSl.slideTo(index);
        }
      });
    })

    // 아래 내용은 css로 적용
    // $('.menu-mo-slide a').on('click', function () {
    //   $('html, body').animate({
    //     scrollTop: $(this.hash).offset().top - 160
    //   }, 200);
    //   return false;
    // });
  };
</script>



<?php
include_once(BV_PATH.'/tail.php'); // 하단
?>