<?php
include_once('./_common.php');
include_once(BV_PATH.'/head.php'); // 상단
include_once(BV_PATH.'/include/tour_category.php');
include_once(BV_PATH.'/include/sub_visual.php');
?>


<!-- 퀵배너 -->
<a href="" class="quick-banner quick-cafe">
  <img src="/source/img/img-cafe_quick.png" alt="날갬카페">
</a>

<div class="container sub">

  <div class="content">

    <div class="nalgaem-view">

      <!-- 상세페이지 제목 + 정보 { -->
      <div class="subwr">
        <div class="nalgaem-view-top">
          <div class="nalgaem-view-tit-wr">
            <p class="nalgaem-view-tit"># 장태산 스카이워크</p>
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
              <li class="nalgaem-view-top-li status">
                <p class="nalgaem-view-status">쾌적</p>
              </li>
              <li class="nalgaem-view-top-li weather">
                <p class="nalgaem-view-weather"><img src="/source/img/icon-weather1.png" alt=""><span>28°</span>맑음</p>
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

      <!-- 투표 { -->
      <div class="subwr">
        <div class="nalgaem-view-vote">
          <p class="nalgaem-view-vote-subj">
            Q. 이 곳 하면 <span>떠오르는 것</span>은?
          </p>
          <div class="nalgaem-view-vote-cnt">
            <!-- 투표 전 : bf 클래스 / 투표 후 : af 클래스 -->
            <form action="" class="nalgaem-view-vote-cnt-in bf">
              <ul class="nalgaem-view-vote-ul">
                <li class="nalgaem-view-vote-li">
                  <input type="radio" name="vote" id="vote1">
                  <label for="vote1">
                    <span class="nalgaem-view-vote-bar" style="width: 22%;"></span>
                    <div class="nalgaem-view-vote-result-wr">
                      <span class="nalgaem-view-vote-txt">첫번째 답변</span>
                      <span class="nalgaem-view-vote-result">22%</span>
                    </div>
                  </label>
                </li>
                <!-- 우세한 곳 : win 클래스 -->
                <li class="nalgaem-view-vote-li win">
                  <input type="radio" name="vote" id="vote2">
                  <label for="vote2">
                    <span class="nalgaem-view-vote-bar" style="width: 78%;"></span>
                    <div class="nalgaem-view-vote-result-wr">
                      <span class="nalgaem-view-vote-txt">두번째 답변</span>
                      <span class="nalgaem-view-vote-result">78%</span>
                    </div>
                  </label>
                </li>
              </ul>
              <div class="nalgaem-view-vote-btn-wr">
                <button type="submit" class="nalgaem-view-vote-btn">투표하기</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- } 투표 -->

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
                          <span>#주관/주최</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#홈페이지</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#주소</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="nalgaem-view-content-type map">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1693895800589" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                  new daum.roughmap.Lander({
                    "timestamp": "1693895800589",
                    "key": "2g4ze",
                  }).render();
                </script>
              </div>
            </li>
            <li class="nalgaem-view-content-li">
              <div class="nalgaem-view-content-type text">
                <div class="nalgaem-view-content-info-l">
                  <span>개요</span>
                </div>
                <div class="nalgaem-view-content-info-r">
                  <div class="nalgaem-view-content-txtbox txtbox1">
                    <p>2023년 김제 문화재 야행은 9월 8일부터 9월 10일까지 3일간 개최된다. 조선시대 교육기관과 행정기관이 함께 보존되어 온 사적 '김제군 관아와 향교'에서 '달빛 풍류, 금빛
                      야행'이라는 부제로 진행된다. 소설 '아리랑'의 주 배경이 된 징게맹갱 외에밋들 김제, 한반도의 곡창지대라 불리는 전라북도 김제의 아픈 역사를 지니고 있다. 금빛이 시작되는 가을
                      밤, 아픈 역사 속에서도 김제의 문화재를 보존하며 지켜온 얼을 아름다운 달빛 아래 담아내고자 한다.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="nalgaem-view-content-li">
              <div class="nalgaem-view-content-type text">
                <div class="nalgaem-view-content-info-l">
                  <span>행사 소개</span>
                </div>
                <div class="nalgaem-view-content-info-r">
                  <div class="nalgaem-view-content-txtbox txtbox1">
                    <p>2023년 김제 문화재 야행은 9월 8일부터 9월 10일까지 3일간 개최된다. 조선시대 교육기관과 행정기관이 함께 보존되어 온 사적 '김제군 관아와 향교'에서 '달빛 풍류, 금빛
                      야행'이라는 부제로 진행된다. 소설 '아리랑'의 주 배경이 된 징게맹갱 외에밋들 김제, 한반도의 곡창지대라 불리는 전라북도 김제의 아픈 역사를 지니고 있다. 금빛이 시작되는 가을
                      밤, 아픈 역사 속에서도 김제의 문화재를 보존하며 지켜온 얼을 아름다운 달빛 아래 담아내고자 한다.</p>
                  </div>
                  <div class="nalgaem-view-content-txtbox txtbox2">
                    <ul class="nalgaem-view-content-txtbox2-ul">
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#메인 프로그램</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#부대 프로그램</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#소비자 참여 프로그램</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#기타 내용</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nalgaem-view-content-li">
              <div class="nalgaem-view-content-type text">
                <div class="nalgaem-view-content-info-l">
                  <span>이용 안내</span>
                </div>
                <div class="nalgaem-view-content-info-r">
                  <div class="nalgaem-view-content-txtbox txtbox2">
                    <ul class="nalgaem-view-content-txtbox2-ul">
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#주관/주최</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#주관/주최</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                      <li class="nalgaem-view-content-txtbox2-li">
                        <div class="nalgaem-view-content-txtbox2-l">
                          <span>#주관/주최주관/주최주관/주최주관/주최주관/주최</span>
                        </div>
                        <div class="nalgaem-view-content-txtbox2-r">
                          <span>안양시민축제추진위원회 / 안양시안양시민축제추진위원회 / 안양시안양시민축제추진위원회 / 안양시안양시민축제추진위원회 / 안양시안양시민축제추진위원회 / 안양시안양시민축제추진위원회 / 안양시</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            </li>
            <li class="nalgaem-view-content-li">
              <div class="nalgaem-view-content-type editor">
                <p>에디터에서 입력하는 내용입니다</p>
                <p><img src="https://picsum.photos/id/70/670/938" alt=""></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- } 상세정보 -->

      <div class="nalgaem-btn-list-wr">
        <a href="" class="nalgaem-btn-list"><img src="/source/img/icon-list.png" alt="">목록보기</a>
      </div>

    </div>
  </div>

</div>

</div>

<script>
$(document).ready(function () {
  
});

</script>

<?php
include_once(BV_PATH.'/tail.php'); // 하단
?>