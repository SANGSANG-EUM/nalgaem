<?php
include_once('./_common.php');
include_once(BV_PATH.'/head.php'); // 상단
?>

<style>
  .header {
    box-shadow: 0 5px 10px 1px rgba(0, 0, 0, .05);
  }
  .footer {
    display: none;
  }
</style>


  <div class="container sub">

    <div class="content">

      <div class="location-wr">

        <!-- 지도영역 -->
        <div class="location-map">
          <!-- 임시 지도 이미지 -->
          <div style="width: 100vw; height: 100vh;"><img style="width: 100%; height: 100%; object-fit: cover;" src="/source/img/img-sample_map.jpg" alt=""></div>

          <!-- 마커 모음 -->
          <!-- marker 클래스 : 공통 / marker-1 클래스 : 관광지 / marker-2 클래스 : 문화시설 / marker-3 클래스 : 축제/공연 / marker-4 클래스 : 카페 / on 클래스 : 강조 -->
          <div style="display: flex; gap: 3vw; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <button type="button" class="marker marker-1">
              <img src="/source/img/icon-marker1.svg" alt="관광지">
            </button>
            <button type="button" class="marker marker-2">
              <img src="/source/img/icon-marker2.svg" alt="문화시설">
            </button>
            <button type="button" class="marker marker-3">
              <img src="/source/img/icon-marker3.svg" alt="축제/공연">
            </button>
            <button type="button" class="marker marker-4">
              <img src="/source/img/icon-marker4.svg" alt="카페">
            </button>
            <button type="button" class="marker marker-1 on">
              <img src="/source/img/icon-marker1.svg" alt="관광지">
            </button>
            <button type="button" class="marker marker-2 on">
              <img src="/source/img/icon-marker2.svg" alt="문화시설">
            </button>
            <button type="button" class="marker marker-3 on">
              <img src="/source/img/icon-marker3.svg" alt="축제/공연">
            </button>
            <button type="button" class="marker marker-4 on">
              <img src="/source/img/icon-marker4.svg" alt="카페">
            </button>
          </div>

        </div>

        <!-- 사이드바 영역 -->
        <aside class="location-sidebar open">

        <!-- 재검색 버튼 -->
        <button type="button" class="location-find-btn">재검색<img src="/source/img/icon-refresh_white.png" alt=""></button>

          <div class="location-top-wr">
            <!-- 검색 -->
            <div class="sub-sch-wr location-sch-wr">
              <form action="" class="sub-sch-in">
                <input type="text" class="sub-sch-input" placeholder="검색어를 입력해주세요.">
                <button type="submit" class="sub-sch-btn"></button>
              </form>
            </div>
            <!-- 현재 위치 표시 -->
            <div class="location-me">
              <img src="/source/img/icon-location.png" alt="위치"><span>대전광역시 서구</span>
            </div>
            <!-- 분류 -->
            <!-- 선택된 분류(location-cate)에는 on 클래스가 붙는다 -->
            <div class="location-cate-wr">
              <button type="button" class="location-cate on">
                <div class="location-cate-img marker-1"><img src="/source/img/icon-marker1.svg" alt="관광지"></div>
                <p class="location-cate-txt">관광지</p>
              </button>
              <button type="button" class="location-cate on">
                <div class="location-cate-img marker-2"><img src="/source/img/icon-marker2.svg" alt="문화시설"></div>
                <p class="location-cate-txt">문화시설</p>
              </button>
              <button type="button" class="location-cate on">
                <div class="location-cate-img marker-3"><img src="/source/img/icon-marker3.svg" alt="축제/공연">
                </div>
                <p class="location-cate-txt">축제/공연</p>
              </button>
              <button type="button" class="location-cate on">
                <div class="location-cate-img marker-4"><img src="/source/img/icon-marker4.svg" alt="카페"></div>
                <p class="location-cate-txt">카페</p>
              </button>
            </div>
          </div>

          <!-- 위치 검색 결과 -->
          <div class="location-result-wr">
            <div class="location-result-txt">검색 결과 <span>10</span>건</div>
            <ul class="location-result-ul">
              <!-- on 클래스로 배경색 변경됨 -->
              <li class="location-result-li on">
                <div class="location-result-img">
                  <img src="https://picsum.photos/id/20/500/700" alt="">
                </div>
                <div class="location-result-info">
                  <div class="location-result-top">
                    <div class="location-result-link">
                      <a href="" class="location-result-tit">홍련암홍련암홍련암홍련암홍련암홍련암홍련암<img src="/source/img/icon-survey.png" alt="설문조사"></a>
                      <a href="" class="location-result-go"><img src="/source/img/icon-link_black.png"
                          alt="상세페이지 이동"></a>
                    </div>
                    <p class="location-result-cate">관광지</p>
                  </div>
                  <div class="location-result-addr"><img src="/source/img/icon-location.png" alt="위치"><span>
                    강원특별자치도 양양군 낙산사로 98-19
                  </span></div>
                </div>
              </li>
              <li class="location-result-li">
                <div class="location-result-img">
                  <img src="https://picsum.photos/id/20/500/700" alt="">
                </div>
                <div class="location-result-info">
                  <div class="location-result-top">
                    <div class="location-result-link">
                      <a href="" class="location-result-tit">홍련암<img src="/source/img/icon-survey.png" alt="설문조사"></a>
                      <a href="" class="location-result-go"><img src="/source/img/icon-link_black.png"
                          alt="상세페이지 이동"></a>
                    </div>
                    <p class="location-result-cate">관광지</p>
                  </div>
                  <div class="location-result-addr"><img src="/source/img/icon-location.png" alt="위치"><span>
                    강원특별자치도 양양군 낙산사로
                      98-19
                  </span></div>
                </div>
              </li>
              <li class="location-result-li">
                <div class="location-result-img">
                  <img src="https://picsum.photos/id/20/500/700" alt="">
                </div>
                <div class="location-result-info">
                  <div class="location-result-top">
                    <div class="location-result-link">
                      <a href="" class="location-result-tit">홍련암</a>
                      <a href="" class="location-result-go"><img src="/source/img/icon-link_black.png"
                          alt="상세페이지 이동"></a>
                    </div>
                    <p class="location-result-cate">관광지</p>
                  </div>
                  <div class="location-result-addr"><img src="/source/img/icon-location.png" alt="위치"><span>
                    강원특별자치도 양양군 낙산사로
                      98-19
                  </span></div>
                </div>
              </li>
              <li class="location-result-li">
                <div class="location-result-img">
                  <img src="https://picsum.photos/id/20/500/700" alt="">
                </div>
                <div class="location-result-info">
                  <div class="location-result-top">
                    <div class="location-result-link">
                      <a href="" class="location-result-tit">홍련암</a>
                      <a href="" class="location-result-go"><img src="/source/img/icon-link_black.png"
                          alt="상세페이지 이동"></a>
                    </div>
                    <p class="location-result-cate">관광지</p>
                  </div>
                  <div class="location-result-addr"><img src="/source/img/icon-location.png" alt="위치"><span>
                    강원특별자치도 양양군 낙산사로
                      98-19
                  </span></div>
                </div>
              </li>
              <li class="location-result-li">
                <div class="location-result-img">
                  <img src="https://picsum.photos/id/20/500/700" alt="">
                </div>
                <div class="location-result-info">
                  <div class="location-result-top">
                    <div class="location-result-link">
                      <a href="" class="location-result-tit">홍련암</a>
                      <a href="" class="location-result-go"><img src="/source/img/icon-link_black.png"
                          alt="상세페이지 이동"></a>
                    </div>
                    <p class="location-result-cate">관광지</p>
                  </div>
                  <div class="location-result-addr"><img src="/source/img/icon-location.png" alt="위치"><span>
                    강원특별자치도 양양군 낙산사로
                      98-19
                  </span></div>
                </div>
              </li>
              <li class="location-result-li">
                <div class="location-result-img">
                  <img src="https://picsum.photos/id/20/500/700" alt="">
                </div>
                <div class="location-result-info">
                  <div class="location-result-top">
                    <div class="location-result-link">
                      <a href="" class="location-result-tit">홍련암</a>
                      <a href="" class="location-result-go"><img src="/source/img/icon-link_black.png"
                          alt="상세페이지 이동"></a>
                    </div>
                    <p class="location-result-cate">관광지</p>
                  </div>
                  <div class="location-result-addr"><img src="/source/img/icon-location.png" alt="위치"><span>
                    강원특별자치도 양양군 낙산사로
                      98-19
                  </span></div>
                </div>
              </li>
              <li class="location-result-li">
                <div class="location-result-img">
                  <img src="https://picsum.photos/id/20/500/700" alt="">
                </div>
                <div class="location-result-info">
                  <div class="location-result-top">
                    <div class="location-result-link">
                      <a href="" class="location-result-tit">홍련암</a>
                      <a href="" class="location-result-go"><img src="/source/img/icon-link_black.png"
                          alt="상세페이지 이동"></a>
                    </div>
                    <p class="location-result-cate">관광지</p>
                  </div>
                  <div class="location-result-addr"><img src="/source/img/icon-location.png" alt="위치"><span>
                    강원특별자치도 양양군 낙산사로
                      98-19강원특별자치도 양양군 낙산사로
                      98-19강원특별자치도 양양군 낙산사로
                      98-19
                  </span></div>
                </div>
              </li>
              <!-- 검색 결과 없을 시 -->
              <!-- <li class="location-no-result">검색 결과가 없습니다.</li> -->
            </ul>
          </div>

          <div class="location-sidebar-handle-wr">
            <button type="button" class="location-sidebar-handle">
              <img src="/source/img/icon-arrow_asside.png" alt="열고닫기">
            </button>
          </div>

        </aside>

      </div>

    </div>

  </div>
