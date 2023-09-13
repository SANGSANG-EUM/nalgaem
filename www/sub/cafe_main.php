<?php
include_once('./_common.php');
include_once(BV_PATH.'/head.php'); // 상단
include_once(BV_PATH.'/include/sub_visual.php');
?>

<div class="container sub">

  <!-- 서브비주얼 { -->
  <?php subVis('cafe'); ?>
  <!-- } 서브비주얼 -->

  <div class="content">

    <div class="sub-cafe-sl-wr">
      <div class="sub-cafe-slider swiper">
        <div class="swiper-wrapper">
          <div class="sub-cafe-slide swiper-slide match_h">
            <div class="sub-cafe-sl-l">
              <a href="" class="sub-cafe-sl-l-img">
                <img src="https://picsum.photos/id/56/600/400" alt="">
              </a>
            </div>
            <div class="sub-cafe-sl-r">
              <a href="" class="sub-cafe-sl-txt-wr">
                <p class="sub-cafe-sl-name">[대전] 카페이름</p>
                <!-- 공백 포함 110자 내외 -->
                <p class="sub-cafe-sl-info">카페소개 텍스트가 표시되는 영역입니다. 카페소개 텍스트가 표시되는
                  영역입니다. 카페소개 텍스트가 표시되는 영역입니다.</p>
              </a>
              <div class="sub-cafe-sl-btm">
                <!-- 글자수 맞춰서 달아야 함 -->
                <div class="cafe-sl-hash-wr">
                  <span class="cafe-sl-hash"># 감성있는</span>
                  <span class="cafe-sl-hash"># 애완견</span>
                  <span class="cafe-sl-hash"># 디저트</span>
                  <span class="cafe-sl-hash"># 감성있는</span>
                  <span class="cafe-sl-hash"># 감성있는</span>
                  <span class="cafe-sl-hash"># 애완견</span>
                </div>
                <div class="sub-cafe-sl-thumbs">
                  <button type="button" class="sub-cafe-sl-thumb on">
                    <img src="https://picsum.photos/id/56/600/400" alt="">
                  </button>
                  <button type="button" class="sub-cafe-sl-thumb">
                    <img src="https://picsum.photos/id/66/600/400" alt="">
                  </button>
                  <button type="button" class="sub-cafe-sl-thumb">
                    <img src="https://picsum.photos/id/76/600/400" alt="">
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="sub-cafe-slide swiper-slide match_h">
            <div class="sub-cafe-sl-l">
              <a href="" class="sub-cafe-sl-l-img">
                <img src="https://picsum.photos/id/96/600/400" alt="">
              </a>
            </div>
            <div class="sub-cafe-sl-r">
              <a href="" class="sub-cafe-sl-txt-wr">
                <p class="sub-cafe-sl-name">[대전] 카페이름</p>
                <!-- 공백 포함 110자 내외 -->
                <p class="sub-cafe-sl-info">카페소개 텍스트가 표시되는 영역입니다. 카페소개 텍스트가 표시되는
                  영역입니다. 카페소개 텍스트가 표시되는 영역입니다.</p>
              </a>
              <div class="sub-cafe-sl-btm">
                <!-- 글자수 맞춰서 달아야 함 -->
                <div class="cafe-sl-hash-wr">
                  <span class="cafe-sl-hash"># 감성있는</span>
                  <span class="cafe-sl-hash"># 애완견</span>
                  <span class="cafe-sl-hash"># 디저트</span>
                  <span class="cafe-sl-hash"># 감성있는</span>
                  <span class="cafe-sl-hash"># 감성있는</span>
                  <span class="cafe-sl-hash"># 애완견</span>
                </div>
                <div class="sub-cafe-sl-thumbs">
                  <button type="button" class="sub-cafe-sl-thumb on">
                    <img src="https://picsum.photos/id/96/600/400" alt="">
                  </button>
                  <button type="button" class="sub-cafe-sl-thumb">
                    <img src="https://picsum.photos/id/106/600/400" alt="">
                  </button>
                  <button type="button" class="sub-cafe-sl-thumb">
                    <img src="https://picsum.photos/id/116/600/400" alt="">
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-cafe-sl-ctr-wr">
        <button type="button" class="main-arrow sub-cafe-arrow prev"><span class="sound_only">이전 슬라이드</span></button>
        <div class="sub-cafe-sl-in">
          <div class="main-sl-fr-wr sub-cafe-sl-fr-wr">
          </div>
          <button type="button" type="button" class="main-sl-btn sub-cafe-sl-btn pause"
            title="프리미엄 카페 슬라이드 멈춤"></button>
        </div>
        <button type="button" class="main-arrow sub-cafe-arrow next"><span class="sound_only">다음 슬라이드</span></button>
      </div>
    </div>

    <div class="wrapper">

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

      <!-- 각 카드는 접속할때마다 랜덤으로 노출 -->
      <div class="sub-main-wr">
        <div class="sub-main-tit-wr">
          <p class="sub-main-tit"># 신규 등록 카페</p>
          <a href="/sub/cafe_new.php" class="sub-main-more btn-more">더보기</a>
        </div>
        <ul class="sub-card-ul cafe-card-ul match_h">
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
          </li>
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
          </li>
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
          </li>
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
          </li>
        </ul>
      </div>

      <div class="sub-main-wr">
        <div class="sub-main-tit-wr">
          <p class="sub-main-tit"># 날갬 추천 카페</p>
          <a href="" class="sub-main-more btn-more">더보기</a>
        </div>
        <ul class="sub-card-ul cafe-card-ul match_h">
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
                </div>
              </div>
            </a>
          </li>
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
              <div class="cafe-sl-img">
                <img src="https://picsum.photos/id/20/500/700" alt="">
                <div class="place-sl-field">대전</div>
              </div>
              <div class="cafe-sl-info no-drag">
                <div class="cafe-sl-name">[대전] 카페이름</div>
                <div class="cafe-sl-hash-wr">
                  <span class="cafe-sl-hash"># 감성있는</span>
                  <span class="cafe-sl-hash"># 애완견</span>
                  <span class="cafe-sl-hash"># 감성있는</span>
                </div>
              </div>
            </a>
          </li>
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
                  <span class="cafe-sl-hash"># 감성있는</span>
                  <span class="cafe-sl-hash"># 감성있는</span>
                </div>
              </div>
            </a>
          </li>
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
          </li>
        </ul>
      </div>

      <div class="sub-main-wr">
        <div class="sub-main-tit-wr">
          <p class="sub-main-tit"># 인기 카페</p>
          <a href="" class="sub-main-more btn-more">더보기</a>
        </div>
        <ul class="sub-card-ul cafe-card-ul match_h">
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
          </li>
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
          </li>
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
          </li>
          <li class="sub-card-li cafe-card-li">
            <a href="/sub/cafe_view.php" class="cafe-sl-inner">
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
          </li>
        </ul>
      </div>

    </div>

  </div>

</div>

<?php
include_once(BV_PATH.'/tail.php'); // 하단
?>
