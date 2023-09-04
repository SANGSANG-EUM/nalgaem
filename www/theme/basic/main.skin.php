<?php
if(!defined('_BLUEVATION_')) exit;
?>


<!-- 인트로페이지 { -->
<div class="intro-page on no-drag">
  <div class="intro-circle"></div>
  <p class="intro-down-txt">SCROLL DOWN</p>
  <div class="mainvs-txt-wr">
    <p class="mainvs-txt black">
      나와 함께 즐거운 라이브 속으로! <br> 날씨 갬성, Nal-Gaem <img src="/source/img/icon-flower_sky.png" alt="">
    </p>
  </div>
</div>
<!-- } 인트로페이지 -->

<div class="container main">
  <div id="fullpage" class="content">
    <div class="mainsec mainsec-1">
      <div class="swiper mainvs-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide mainvs-slide">
            <img src="/source/img/img-mainvisual1.jpg" alt="">
          </div>
          <div class="swiper-slide mainvs-slide">
            <img src="https://picsum.photos/id/94/2000/1000" alt="">
          </div>
          <div class="swiper-slide mainvs-slide">
            <img src="https://picsum.photos/id/10/2000/1000" alt="">
          </div>
        </div>
      </div>
      <div class="mainvs-inner">
        <form action="" class="mainvs-sch-wr">
          <input type="text" class="mainvs-sch" placeholder="여행지 또는 궁금하신 정보를 입력해주세요.">
          <button type="submit" class="mainvs-sch-btn"><img src="/source/img/icon-search_white.png" alt="검색"></button>
        </form>
        <div class="mainvs-ctr-wr">
          <div class="swiper-pagination mainvs-pagination"></div>
          <button type="button" type="button" class="mainvs-btn pause" title="배경 슬라이드 멈춤"></button>
        </div>
      </div>
      <div class="mainvs-arrow-wr">
        <button type="button" class="mainvs-arrow prev"><span class="sound_only">이전 슬라이드</span></button>
        <button type="button" class="mainvs-arrow next"><span class="sound_only">다음 슬라이드</span></button>
      </div>
      <div class="mainvs-txt-wr no-drag">
        <p class="mainvs-txt white">
          나와 함께 즐거운 라이브 속으로! <br> 날씨 갬성, Nal-Gaem <img src="/source/img/icon-flower_white.png" alt="">
        </p>
      </div>
      <div class="mainvs-scroll-down">
        <img src="/source/img/img-scrolldown.png" alt="Scroll Down">
      </div>
    </div>
    <div class="mainsec mainsec-2">
      <div class="wrapper">
        <div class="main-tit-wr no-drag">
          <p class="main-tit">LIVE, 대한민국</p>
          <p class="main-subtit">주요 관광지 및 행사 현장의 날씨를 실시간 라이브로 확인해보세요!</p>
        </div>
      </div>
      <div class="swiper live-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide live-slide">
            <div class="live-sl-video">
              <img src="https://picsum.photos/id/27/500/700" alt="" class="live-sl-thumb"></img>
              <iframe src="https://www.youtube.com/embed/MljpuzHfXWw?si=-ppSWAigKFswswe0?enablejsapi=1"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
              <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                  class="sound_only">즐겨찾기</span></button>
              <div class="live-info-wr">
                <span class="live-temperature">28˚</span>
                <span class="live-weather">맑음</span>
              </div>
            </div>
            <p class="live-sl-tit">영상 타이틀 표시</p>
          </div>
          <div class="swiper-slide live-slide">
            <div class="live-sl-video">
              <iframe src="https://www.youtube.com/embed/MljpuzHfXWw?si=-ppSWAigKFswswe0" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
              <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                  class="sound_only">즐겨찾기</span></button>
              <div class="live-info-wr">
                <span class="live-temperature">28˚</span>
                <span class="live-weather">맑음</span>
              </div>
            </div>
            <p class="live-sl-tit">영상 타이틀 표시</p>
          </div>
          <div class="swiper-slide live-slide">
            <div class="live-sl-video">
              <iframe src="https://www.youtube.com/embed/MljpuzHfXWw?si=-ppSWAigKFswswe0" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
              <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                  class="sound_only">즐겨찾기</span></button>
              <div class="live-info-wr">
                <span class="live-temperature">28˚</span>
                <span class="live-weather">맑음</span>
              </div>
            </div>
            <p class="live-sl-tit">영상 타이틀 표시</p>
          </div>
          <div class="swiper-slide live-slide">
            <div class="live-sl-video">
              <iframe src="https://www.youtube.com/embed/MljpuzHfXWw?si=-ppSWAigKFswswe0" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
              <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                  class="sound_only">즐겨찾기</span></button>
              <div class="live-info-wr">
                <span class="live-temperature">28˚</span>
                <span class="live-weather">맑음</span>
              </div>
            </div>
            <p class="live-sl-tit">영상 타이틀 표시</p>
          </div>
          <div class="swiper-slide live-slide">
            <div class="live-sl-video">
              <iframe src="https://www.youtube.com/embed/MljpuzHfXWw?si=-ppSWAigKFswswe0" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
              <button type="button" class="live-fav-btn" onclick="liveBtn()"><span
                  class="sound_only">즐겨찾기</span></button>
              <div class="live-info-wr">
                <span class="live-temperature">28˚</span>
                <span class="live-weather">맑음</span>
              </div>
            </div>
            <p class="live-sl-tit">영상 타이틀 표시</p>
          </div>
        </div>
        <div class="main-sl-ctr-wr live-sl-ctr-wr">
          <button type="button" class="main-arrow live-arrow prev"><span class="sound_only">이전 슬라이드</span></button>
          <div class="main-sl-in-wr">
            <div class="main-sl-fr-wr live-sl-fr-wr">
            </div>
            <button type="button" type="button" class="main-sl-btn live-sl-btn pause" title="라이브 슬라이드 멈춤"></button>
          </div>
          <button type="button" class="main-arrow live-arrow next"><span class="sound_only">다음 슬라이드</span></button>
        </div>
      </div>
    </div>
    <div class="mainsec mainsec-3">
      <div class="main-calendar-wr">
        <div class="wrapper">
          <div class="calendar-today-wr no-drag">
            <button type="button" class="calendar-today-btn"><span class="calendar-today-icon">Today</span><span
                class="calendar-today-txt">2023년 08월 07일</span></button>
          </div>
          <div class="swiper calendar-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide calendar-slide">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    TUE
                  </div>
                  <div class="calendar-date">
                    08.01
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <div class="swiper-slide calendar-slide">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    WED
                  </div>
                  <div class="calendar-date">
                    08.02
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <div class="swiper-slide calendar-slide">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    THU
                  </div>
                  <div class="calendar-date">
                    08.03
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <div class="swiper-slide calendar-slide">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    FRI
                  </div>
                  <div class="calendar-date">
                    08.04
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <!-- 토요일 : saturday 클래스 추가 -->
              <div class="swiper-slide calendar-slide saturday">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    SAT
                  </div>
                  <div class="calendar-date">
                    08.05
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <!-- 일요일 : sunday 클래스 추가 -->
              <div class="swiper-slide calendar-slide sunday">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    SUN
                  </div>
                  <div class="calendar-date">
                    08.06
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <div class="swiper-slide calendar-slide today">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    MON
                  </div>
                  <div class="calendar-date">
                    08.07
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <div class="swiper-slide calendar-slide">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    TUE
                  </div>
                  <div class="calendar-date">
                    08.08
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <div class="swiper-slide calendar-slide">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    WED
                  </div>
                  <div class="calendar-date">
                    08.09
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <div class="swiper-slide calendar-slide">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    THU
                  </div>
                  <div class="calendar-date">
                    08.10
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <div class="swiper-slide calendar-slide">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    FRI
                  </div>
                  <div class="calendar-date">
                    08.11
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
              <div class="swiper-slide calendar-slide">
                <div class="calendar-day-wr no-drag">
                  <div class="calendar-day">
                    SAT
                  </div>
                  <div class="calendar-date saturday">
                    08.12
                  </div>
                </div>
                <div class="calendar-info no-drag">
                  축제 10개 / 행사 8개 / 공연 3개
                </div>
              </div>
            </div>
          </div>
          <div class="calendar-ctr-wr">
            <button type="button" class="circle-arrow calendar-arrow prev"><span class="sound_only">이전
                슬라이드</span></button>
            <button type="button" class="circle-arrow calendar-arrow next"><span class="sound_only">다음
                슬라이드</span></button>
          </div>
        </div>
      </div>
      <div class="notice-wr">
        <div class="wrapper">
          <div class="main-tit-wr no-drag">
            <p class="main-tit">공지사항</p>
            <p class="main-subtit">날갬의 새로운 소식을 확인해보세요.</p>
            <a href="" class="main-sl-more notice-sl-more btn-more">더보기</a>
          </div>
          <div class="swiper notice-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide notice-slide">
                <a href="" class="notice-sl-link">
                  <div class="notice-sl-top">
                    <p class="notice-sl-date">2023.08.24</p>
                    <p class="notice-sl-subj">공지 제목이 표시됩니다. 공지 제목이 표시됩니다.</p>
                  </div>
                  <div class="notice-sl-btm">
                    <div class="notice-sl-cnt">
                      공지 내용이 미리보기로 표기되는 영역입니다. 공지 내용이 미리보기로 표기되는 영역입니다. 공지 내용이 미리보기로 표기되는 영역입니다.
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide notice-slide">
                <a href="" class="notice-sl-link">
                  <div class="notice-sl-top">
                    <p class="notice-sl-date">2023.08.24</p>
                    <p class="notice-sl-subj">공지 제목이 표시됩니다. 공지 제목이 표시됩니다.</p>
                  </div>
                  <div class="notice-sl-btm">
                    <div class="notice-sl-cnt">
                      공지 내용이 미리보기로 표기되는 영역입니다. 공지 내용이 미리보기로 표기되는 영역입니다. 공지 내용이 미리보기로 표기되는 영역입니다.
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide notice-slide">
                <a href="" class="notice-sl-link">
                  <div class="notice-sl-top">
                    <p class="notice-sl-date">2023.08.24</p>
                    <p class="notice-sl-subj">공지 제목이 표시됩니다. 공지 제목이 표시됩니다.</p>
                  </div>
                  <div class="notice-sl-btm">
                    <div class="notice-sl-cnt">
                      공지 내용이 미리보기로 표기되는 영역입니다. 공지 내용이 미리보기로 표기되는 영역입니다. 공지 내용이 미리보기로 표기되는 영역입니다.
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide notice-slide">
                <a href="" class="notice-sl-link">
                  <div class="notice-sl-top">
                    <p class="notice-sl-date">2023.08.24</p>
                    <p class="notice-sl-subj">공지 제목이 표시됩니다. 공지 제목이 표시됩니다.</p>
                  </div>
                  <div class="notice-sl-btm">
                    <div class="notice-sl-cnt">
                      공지 내용이 미리보기로 표기되는 영역입니다. 공지 내용이 미리보기로 표기되는 영역입니다. 공지 내용이 미리보기로 표기되는 영역입니다.
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="main-sl-ctr-wr notice-sl-ctr-wr">
            <button type="button" class="main-arrow notice-arrow prev"><span class="sound_only">이전
                슬라이드</span></button>
            <div class="main-sl-in-wr">
              <div class="main-sl-fr-wr notice-sl-fr-wr">
              </div>
              <button type="button" type="button" class="main-sl-btn notice-sl-btn pause" title="공지사항 슬라이드 멈춤"></button>
            </div>
            <button type="button" class="main-arrow notice-arrow next"><span class="sound_only">다음
                슬라이드</span></button>
          </div>
        </div>
      </div>
    </div>
    <div class="mainsec mainsec-4">
      <div class="wrapper">
        <div class="main-tit-wr no-drag">
          <p class="main-tit">핫플레이스</p>
          <p class="main-subtit">지금 뜨고 있는 관광지 및 축제·행사는 무엇이 있을까요?</p>
          <a href="" class="main-sl-more place-sl-more btn-more">더보기</a>
        </div>
      </div>
      <div class="place-slider-wr">
        <div class="swiper place-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide place-slide">
              <div class="place-sl-num">01</div>
              <a href="" class="place-sl-inner">
                <div class="place-sl-img"><img src="https://picsum.photos/id/28/500/700" alt=""></div>
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
                  <!-- <button type="button" class="live-fav-btn" onclick="liveBtn()"><span class="sound_only">즐겨찾기</span></button> -->
                </div>
              </a>
            </div>
            <div class="swiper-slide place-slide">
              <div class="place-sl-num">02</div>
              <a href="" class="place-sl-inner">
                <div class="place-sl-img"><img src="https://picsum.photos/id/27/500/700" alt=""></div>
                <div class="place-sl-info-wr">
                  <div class="place-sl-condition">혼잡</div>
                  <div class="place-sl-weather-wr">
                    <div class="place-sl-temperature">28˚</div>
                    <div class="place-sl-sky-wr">
                      <p>현재날씨</p>
                      <p class="place-sl-sky">맑음</p>
                    </div>
                  </div>
                  <div class="place-sl-name">[제주] 유채꽃 축제</div>
                </div>
                <div class="place-sl-field">
                  축제
                </div>
                <div class="card-icon-wr">
                  <div class="place-sl-mark-wr">
                    <div class="place-sl-mark place-sl-mark--pop">
                      인기
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide place-slide">
              <div class="place-sl-num">03</div>
              <a href="" class="place-sl-inner">
                <div class="place-sl-img"><img src="https://picsum.photos/id/29/500/700" alt=""></div>
                <div class="place-sl-info-wr">
                  <div class="place-sl-condition">쾌적</div>
                  <div class="place-sl-weather-wr">
                    <div class="place-sl-temperature">28˚</div>
                    <div class="place-sl-sky-wr">
                      <p>현재날씨</p>
                      <p class="place-sl-sky">대체로 흐림</p>
                    </div>
                  </div>
                  <div class="place-sl-name">[천안] 한마당 공연</div>
                </div>
                <div class="place-sl-field">
                  <span>공연</span>
                </div>
                <div class="card-icon-wr">
                  <div class="place-sl-mark-wr">
                    <div class="place-sl-mark place-sl-mark--rec">
                      <span>추천</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide place-slide">
              <div class="place-sl-num">04</div>
              <a href="" class="place-sl-inner">
                <div class="place-sl-img"><img src="https://picsum.photos/id/26/500/700" alt=""></div>
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
                </div>
              </a>
            </div>
            <div class="swiper-slide place-slide">
              <div class="place-sl-num">05</div>
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
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="place-ctr-wr">
          <button type="button" class="main-arrow place-arrow prev"><span class="sound_only">이전 슬라이드</span></button>
          <button type="button" class="main-arrow place-arrow next"><span class="sound_only">다음 슬라이드</span></button>
        </div>
      </div>
    </div>
    <div class="mainsec mainsec-5">
      <div class="wrapper">
        <div class="main-tit-wr no-drag">
          <p class="main-tit">추천 카페</p>
          <p class="main-subtit">신규 등록된 카페를 확인해보시고 마음에 드시는 곳에 방문해보세요.</p>
          <a href="" class="main-sl-more cafe-sl-more btn-more">더보기</a>
        </div>
      </div>
      <div class="cafe-sl-wr">
        <div class="swiper cafe-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide cafe-slide">
              <a href="" class="cafe-sl-inner">
                <div class="cafe-sl-img">
                  <img src="https://picsum.photos/id/20/500/700" alt="">
                  <div class="place-sl-field">대전</div>
                </div>
                <div class="cafe-sl-info no-drag">
                  <div class="cafe-sl-name">[대전] 카페이름</div>
                  <div class="cafe-sl-hash-wr">
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 애완견</span>
                    <span class="cafe-sl-hash"># 디저트</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide cafe-slide">
              <a href="" class="cafe-sl-inner">
                <div class="cafe-sl-img">
                  <img src="https://picsum.photos/id/70/500/700" alt="">
                  <div class="place-sl-field">대전</div>
                </div>
                <div class="cafe-sl-info no-drag">
                  <div class="cafe-sl-name">[대전] 카페이름</div>
                  <div class="cafe-sl-hash-wr">
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide cafe-slide">
              <a href="" class="cafe-sl-inner">
                <div class="cafe-sl-img">
                  <img src="https://picsum.photos/id/30/500/700" alt="">
                  <div class="place-sl-field">대전</div>
                </div>
                <div class="cafe-sl-info no-drag">
                  <div class="cafe-sl-name">[대전] 카페이름</div>
                  <div class="cafe-sl-hash-wr">
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide cafe-slide">
              <a href="" class="cafe-sl-inner">
                <div class="cafe-sl-img">
                  <img src="https://picsum.photos/id/40/500/700" alt="">
                  <div class="place-sl-field">대전</div>
                </div>
                <div class="cafe-sl-info no-drag">
                  <div class="cafe-sl-name">[대전] 카페이름</div>
                  <div class="cafe-sl-hash-wr">
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide cafe-slide">
              <a href="" class="cafe-sl-inner">
                <div class="cafe-sl-img">
                  <img src="https://picsum.photos/id/60/500/700" alt="">
                  <div class="place-sl-field">대전</div>
                </div>
                <div class="cafe-sl-info no-drag">
                  <div class="cafe-sl-name">[대전] 카페이름</div>
                  <div class="cafe-sl-hash-wr">
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                    <span class="cafe-sl-hash"># 감성있는</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="main-sl-ctr-wr cafe-sl-ctr-wr">
            <button type="button" class="main-arrow cafe-arrow prev"><span class="sound_only">이전
                슬라이드</span></button>
            <div class="main-sl-in-wr">
              <div class="main-sl-fr-wr cafe-sl-fr-wr">
              </div>
              <button type="button" type="button" class="main-sl-btn cafe-sl-btn pause" title="추천카페 슬라이드 멈춤"></button>
            </div>
            <button type="button" class="main-arrow cafe-arrow next"><span class="sound_only">다음
                슬라이드</span></button>
          </div>
        </div>
      </div>
    </div>
    <div class="mainsec mainsec-6">
      <footer class="footer main-foot">
        <div class="wrapper">
          <div class="foot-tit-wr">
            <p class="foot-tit">여행이나 특별한 외출 전, <br>
              날갬 APP으로 날씨를 확인하세요!</p>
            <div class="foot-app-link-wr">
              <a href="" class="foot-app-link foot-app-link--apple">
                <img src="/source/img/icon-apple.png" alt="">
                App Store
              </a>
              <a href="" class="foot-app-link foot-app-link--google">
                <img src="/source/img/icon-playstore.png" alt="">
                Google Play
              </a>
            </div>
          </div>
          <div class="foot-box">
            <a href="#page01" class="main-foot-top">
              <img src="/source/img/icon-top.png" alt="최상단으로">
            </a>
            <div class="foot-box-in foot-box-in--l">
              <div class="foot-info-wr">
                <p class="foot-info">대전광역시 유성구 테크노4로 17 대덕비즈센터 B동 101호</p>
                <p class="foot-info"><span>TEL</span> 042-933-5520</p>
                <p class="foot-info"><span>E-MAIL</span> steve17@sijung.com</p>
                <p class="foot-info"><span>사업자등록번호</span> 601-86-00597</p>
              </div>
              <div class="foot-copyright">
                Copyright (C) SIJUNG. All Right Reserved.
              </div>
            </div>
            <div class="foot-box-in foot-box-in--r foot-sns-link-wr">
              <a href="" class="foot-sns-link foot-sns-link--facebook">
                <img src="/source/img/icon-facebook.png" alt="">
              </a>
              <a href="" class="foot-sns-link foot-sns-link--youtube">
                <img src="/source/img/icon-youtube.png" alt="">
              </a>
              <a href="" class="foot-sns-link foot-sns-link--instagram">
                <img src="/source/img/icon-instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</div>