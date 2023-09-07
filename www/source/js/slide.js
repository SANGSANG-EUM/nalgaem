$(document).ready(function () {
  // 서브페이지 지역 슬라이드
  let regionSl = new Swiper(".region-slider", {
    slidesPerView: 3,
    spaceBetween: 10,
    slidesToScroll: 1,
    // centeredSlides: true,
    // loop: true,
    // loopAdditionalSlides: 1,
    accessibility: true,
    navigation: {
      nextEl: ".region-arrow.next",
      prevEl: ".region-arrow.prev",
    },
    // on: {
    //   slideChange: function () {
    //     $('.mainvs-current').text(mainvisual.realIndex + 1)
    //   },
    // },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    breakpoints: {
      385: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      481: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
      560: {
        slidesPerView: 6,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 7,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 7,
        spaceBetween: 20,
      },
      1291: {
        slidesPerView: 8,
        spaceBetween: 30,
      },
      1441: {
        slidesPerView: 10,
      },
      1600: {
        slidesPerView: 12,
        spaceBetween: 10,
      },
    },
  });


  // 프리미엄 카페 슬라이드
  let subCafeSl = new Swiper(".sub-cafe-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    slidesToScroll: 1,
    // centeredSlides: true,
    loop: true,
    loopAdditionalSlides: 1,
    accessibility: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".sub-cafe-sl-fr-wr",
      clickable: true,
      type: "fraction",
    },
    navigation: {
      nextEl: ".sub-cafe-arrow.next",
      prevEl: ".sub-cafe-arrow.prev",
    },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    on: {
      slideChange: function () {

      },
    },
    breakpoints: {
      1600: {
        spaceBetween: 220,
        slidesPerView: 'auto',
      },
    },
  });

  $('.sub-cafe-sl-btn').on('click', function () {
    // 멈춤 클릭
    if ($(this).hasClass('pause')) {
      subCafeSl.autoplay.stop();
      $(this).attr('title', '프리미엄 카페 슬라이드 재생');
      $(this).removeClass('pause');
      $(this).addClass('play');
      // 다시재생 클릭
    } else if ($(this).hasClass('play')) {
      subCafeSl.autoplay.start();
      $(this).attr('title', '프리미엄 카페 슬라이드 멈춤');
      $(this).removeClass('play');
      $(this).addClass('pause');
    };
  });

  // 서브페이지 카페 슬라이드 썸네일 버튼
  $('.sub-cafe-sl-thumb').on('click', function () {
    let cafeThumbSrc = $(this).find('img').attr('src');
    $(this).closest('.sub-cafe-sl-r').siblings('.sub-cafe-sl-l').find('.sub-cafe-sl-l-img img').attr('src',
      cafeThumbSrc);
    $(this).siblings('.sub-cafe-sl-thumb').removeClass('on');
    $(this).addClass('on');
  });


  // 날갬 뷰페이지 썸네일 슬라이드
  let viewSl = new Swiper(".nalgaem-view-slider", {
    slidesPerView: 'auto',
    spaceBetween: 10,
    slidesToScroll: 1,
    centeredSlides: true,
    loop: true,
    loopAdditionalSlides: 1,
    accessibility: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".view-sl-fr-wr",
      clickable: true,
      type: "fraction",
    },
    navigation: {
      nextEl: ".view-arrow.next",
      prevEl: ".view-arrow.prev",
    },
    // on: {
    //   slideChange: function () {
    //     $('.mainvs-current').text(mainvisual.realIndex + 1)
    //   },
    // },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    breakpoints: {
      768: {
        slidesPerView: 'auto',
        spaceBetween: 24,
      },
    },
  });

  $('.view-sl-btn').on('click', function () {
    // 멈춤 클릭
    if ($(this).hasClass('pause')) {
      viewSl.autoplay.stop();
      $(this).attr('title', '썸네일 슬라이드 재생');
      $(this).removeClass('pause');
      $(this).addClass('play');
      // 다시재생 클릭
    } else if ($(this).hasClass('play')) {
      viewSl.autoplay.start();
      $(this).attr('title', '썸네일 슬라이드 멈춤');
      $(this).removeClass('play');
      $(this).addClass('pause');
    };
  });

  
  
  // 메인비주얼 슬라이드        
  let mainvisual = new Swiper(".mainvs-slider", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: "fade",
    pagination: {
      el: ".mainvs-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".mainvs-arrow.next",
      prevEl: ".mainvs-arrow.prev",
    },
    // on: {
    //   slideChange: function () {
    //     $('.mainvs-current').text(mainvisual.realIndex + 1)
    //   },
    // },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
  });

  // // praction 커스텀
  // $('.mainvs-current').text('1');
  // let mainTot = $('.mainvs-slider .mainvs-slide').length;
  // $('.mainvs-total').text(mainTot);

  $('.mainvs-btn').on('click', function () {
    // 멈춤 클릭
    if ($(this).hasClass('pause')) {
      mainvisual.autoplay.stop();
      $(this).attr('title', '배경 슬라이드 재생');
      $(this).removeClass('pause');
      $(this).addClass('play');
      // 다시재생 클릭
    } else if ($(this).hasClass('play')) {
      mainvisual.autoplay.start();
      $(this).attr('title', '배경 슬라이드 멈춤');
      $(this).removeClass('play');
      $(this).addClass('pause');
    };
  });


  // 라이브 슬라이드
  let liveSl = new Swiper(".live-slider", {
    // effect: "coverflow",
    // coverflowEffect: {
    //   rotate: 0,
    //   stretch: 0,
    //   depth: 100,
    //   modifier: 2,
    //   slideShadows: false
    // },
    slidesPerView: 1,
    spaceBetween: 30,
    slidesToScroll: 1,
    centeredSlides: true,
    loop: true,
    loopAdditionalSlides: 1,
    accessibility: true,
    autoplay: {
      delay: 10000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".live-sl-fr-wr",
      clickable: true,
      type: "fraction",
    },
    navigation: {
      nextEl: ".live-arrow.next",
      prevEl: ".live-arrow.prev",
    },
    // on: {
    //   slideChange: function () {
    //     $('.mainvs-current').text(mainvisual.realIndex + 1)
    //   },
    // },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    breakpoints: {
      481: {
        slidesPerView: 1.8,
      },
      768: {
        slidesPerView: 2.5,
      },
      1291: {
        slidesPerView: 4,
      },
    },
  });

  $('.live-sl-btn').on('click', function () {
    // 멈춤 클릭
    if ($(this).hasClass('pause')) {
      liveSl.autoplay.stop();
      $(this).attr('title', '배경 슬라이드 재생');
      $(this).removeClass('pause');
      $(this).addClass('play');
      // 다시재생 클릭
    } else if ($(this).hasClass('play')) {
      liveSl.autoplay.start();
      $(this).attr('title', '배경 슬라이드 멈춤');
      $(this).removeClass('play');
      $(this).addClass('pause');
    };
  });

  // 슬라이드 갯수 확인
  let slideCountLive = document.querySelectorAll('.live-slide:not(.swiper-slide-duplicate)').length;

  if (slideCountLive == 2) {
    if ($(window).width() > 767) {
      liveSl.destroy();
      document.querySelector('.live-slider').classList.add('slide--0');
    }
  } else if (slideCountLive == 1) {
    liveSl.destroy();
    document.querySelector('.live-slider').classList.add('slide--0');
  }

  // 라이브 슬라이드
  $('.live-sl-thumb').on('click', function () {
    $(this).siblings('iframe').find('.html5-video-player').trigger('click');
    $(this).fadeOut();
  });


  // 캘린더 슬라이드
  let calSl = new Swiper(".calendar-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesToScroll: 1,
    centeredSlides: true,
    accessibility: true,
    navigation: {
      nextEl: ".calendar-arrow.next",
      prevEl: ".calendar-arrow.prev",
    },
    // on: {
    //   slideChange: function () {
    //     $('.mainvs-current').text(mainvisual.realIndex + 1)
    //   },
    // },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    breakpoints: {
      481: {
        slidesPerView: 5,
      },
      768: {
        slidesPerView: 5,
      },
      1024: {
        slidesPerView: 7,
      },
      1441: {
        slidesPerView: 9,
      },
    },
  });

  // today 클래스가 붙어있는 캘린더 슬라이드로 이동
  let todayIndex = $('.calendar-slide.today').index()
  calSl.slideTo(todayIndex, 1000, false);

  // 클릭한 슬라이드로 이동
  $('.calendar-slide').on('click', function () {
    calSl.slideTo($(this).index(), 1000, false);
  });

  // Today 버튼 클릭하면 today 클래스로 이동
  $('.calendar-today-btn').on('click', function () {
    calSl.slideTo(todayIndex, 1000, false);
  });


  // 공지사항 슬라이드
  let noticeSl = new Swiper(".notice-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    slidesToScroll: 1,
    loop: true,
    loopAdditionalSlides: 1,
    accessibility: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".notice-sl-fr-wr",
      clickable: true,
      type: "fraction",
    },
    navigation: {
      nextEl: ".notice-arrow.next",
      prevEl: ".notice-arrow.prev",
    },
    // on: {
    //   slideChange: function () {
    //     $('.mainvs-current').text(mainvisual.realIndex + 1)
    //   },
    // },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    breakpoints: {
      481: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1291: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

  $('.notice-sl-btn').on('click', function () {
    // 멈춤 클릭
    if ($(this).hasClass('pause')) {
      noticeSl.autoplay.stop();
      $(this).attr('title', '공지사항 슬라이드 재생');
      $(this).removeClass('pause');
      $(this).addClass('play');
      // 다시재생 클릭
    } else if ($(this).hasClass('play')) {
      noticeSl.autoplay.start();
      $(this).attr('title', '공지사항 슬라이드 멈춤');
      $(this).removeClass('play');
      $(this).addClass('pause');
    };
  });

  // 슬라이드 갯수 확인
  let slideCountNoti = document.querySelectorAll('.notice-slide:not(.swiper-slide-duplicate)').length;

  if (slideCountNoti == 3) {
    if ($(window).width() > 1290) {
      noticeSl.destroy();
      document.querySelector('.notice-slider').classList.add('slide--0');
      $('.notice-sl-ctr-wr').css('display', 'none');
    }
  } else if (slideCountNoti == 2) {
    if ($(window).width() > 767) {
      noticeSl.destroy();
      document.querySelector('.notice-slider').classList.add('slide--0');
      $('.notice-sl-ctr-wr').css('display', 'none');
    }
  } else if (slideCountNoti == 1) {
    noticeSl.destroy();
    document.querySelector('.notice-slider').classList.add('slide--0');
    $('.notice-sl-ctr-wr').css('display', 'none');
  }


  // 핫플레이스 슬라이드
  let placeSl = new Swiper(".place-slider", {
    slidesPerView: 1.2,
    spaceBetween: 10,
    slidesToScroll: 1,
    loop: true,
    loopAdditionalSlides: 1,
    accessibility: true,
    centeredSlides: true,
    navigation: {
      nextEl: ".place-arrow.next",
      prevEl: ".place-arrow.prev",
    },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    breakpoints: {
      481: {
        slidesPerView: 2,
        spaceBetween: 10,
        centeredSlides: false,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
        centeredSlides: false,
      },
      1291: {
        slidesPerView: 3.965,
        spaceBetween: 30,
        centeredSlides: false,
      },
      1600: {
        slidesPerView: 3.965,
        spaceBetween: 70,
        centeredSlides: false,
      },
    },
  });

  // 슬라이드 갯수 확인
  let slideCountPlace = document.querySelectorAll('.place-slide:not(.swiper-slide-duplicate)').length;

  if (slideCountPlace == 3) {
    if ($(window).width() > 767) {
      placeSl.destroy();
      document.querySelector('.place-slider-wr').classList.add('slide--0');
    }
  } else if (slideCountPlace == 2) {
    if ($(window).width() > 480) {
      placeSl.destroy();
      document.querySelector('.place-slider-wr').classList.add('slide--0');
    }
  } else if (slideCountPlace == 1) {
    placeSl.destroy();
    document.querySelector('.place-slider-wr').classList.add('slide--0');
  }


  // 추천카페 슬라이드
  let cafeSl = new Swiper(".cafe-slider", {
    slidesPerView: 1.1,
    spaceBetween: 10,
    slidesToScroll: 1,
    centeredSlides: true,
    loop: true,
    loopAdditionalSlides: 1,
    accessibility: true,
    autoHeight: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".cafe-sl-fr-wr",
      clickable: true,
      type: "fraction",
    },
    navigation: {
      nextEl: ".cafe-arrow.next",
      prevEl: ".cafe-arrow.prev",
    },
    // on: {
    //   slideChange: function () {
    //     $('.mainvs-current').text(mainvisual.realIndex + 1)
    //   },
    // },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    breakpoints: {
      481: {
        slidesPerView: 1.5,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1291: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      1600: {
        slidesPerView: 5,
        spaceBetween: 40,
      },
    },
  });

  $('.cafe-sl-btn').on('click', function () {
    // 멈춤 클릭
    if ($(this).hasClass('pause')) {
      cafeSl.autoplay.stop();
      $(this).attr('title', '추천카페 슬라이드 재생');
      $(this).removeClass('pause');
      $(this).addClass('play');
      // 다시재생 클릭
    } else if ($(this).hasClass('play')) {
      cafeSl.autoplay.start();
      $(this).attr('title', '추천카페 슬라이드 멈춤');
      $(this).removeClass('play');
      $(this).addClass('pause');
    };
  });

  // 슬라이드 갯수 확인
  let slideCountCafe = document.querySelectorAll('.cafe-slide:not(.swiper-slide-duplicate)').length;

  if (slideCountCafe < 3) {
    // 슬라이드 갯수가 3개보다 작은 경우
    cafeSl.destroy();
    document.querySelector('.cafe-slider').classList.add('slide--0');
  }


});