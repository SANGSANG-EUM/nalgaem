$(document).ready(function () {

  // 날갬 상세 텍스트 간격 정리
  if ($(window).width() > 1023) {
    // Get all .nalgaem-view-content-li elements
    const liElements = document.querySelectorAll('.nalgaem-view-content-li');

    // Loop through each .nalgaem-view-content-li
    liElements.forEach(li => {
      // Get all .nalgaem-view-content-txtbox2-l elements within the current li
      const lElements = li.querySelectorAll('.nalgaem-view-content-txtbox2-l span');

      // Initialize a variable to store the maximum width within this li
      let maxWidth = 0;

      // Loop through .nalgaem-view-content-txtbox2-l elements to find the maximum width within this li
      lElements.forEach(l => {
        const lWidth = l.offsetWidth;
        if (lWidth > maxWidth) {
          maxWidth = lWidth;

          console.log(maxWidth);
        }
      });

      // Set the width of all .nalgaem-view-content-txtbox2-l elements within the current li to the maximum width within this li
      lElements.forEach(l => {
        l.style.width = `${maxWidth + 1}px`;
      });


      // Reset the maxWidth for the next iteration
      maxWidth = 0;
    });
  }


  // 동일 박스 높이
  $(".match_h > *").matchHeight();

  // DatePicker
  $(function () {
    $(".input-date").datepicker({
      dateFormat: 'yy.mm.dd',
      closeText: "닫기",
      currentText: "오늘",
      prevText: '이전 달',
      nextText: '다음 달',
      monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
      monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
      dayNames: ['일', '월', '화', '수', '목', '금', '토'],
      dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
      dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
      showMonthAfterYear: true,
      weekHeader: "주",
      yearSuffix: '년',
      showAnim: "slideDown"
    });
  });


  // 내주변검색 사이드바
  $('.location-sidebar-handle').on('click', function () {
    if ($('.location-sidebar').hasClass('open')) {
      $('.location-sidebar').removeClass('open');
      $('.location-sidebar').addClass('close');
    } else {
      $('.location-sidebar').addClass('open');
      $('.location-sidebar').removeClass('close');
    }
  });


  function getTextColorByBackgroundColor(hexColor) {

    const c = hexColor.substring(1) // 색상 앞의 # 제거
    const rgb = parseInt(c, 16) // rrggbb를 10진수로 변환
    const r = (rgb >> 16) & 0xff // red 추출
    const g = (rgb >> 8) & 0xff // green 추출
    const b = (rgb >> 0) & 0xff // blue 추출

    const luma = 0.2126 * r + 0.7152 * g + 0.0722 * b // per ITU-R BT.709

    // 색상 선택
    return luma < 127.5 ? "white" : "black" // 글자색이
  }


  // 날갬 뷰페이지 투표 전 후
  if ($('.nalgaem-view-vote-cnt-in').hasClass('af')) {
    $('.nalgaem-view-vote-btn').html('투표완료');
    $('.nalgaem-view-vote-btn').attr('disabled', true);
  } else if ($('.nalgaem-view-vote-cnt-in').hasClass('bf')) {
    $('.nalgaem-view-vote-btn').html('투표하기');
  }


  // 날갬 뷰페이지 투표 글씨 색상
  // 각 li 요소를 선택합니다.
  const liVote = document.querySelectorAll('.nalgaem-view-vote-cnt-in.af .nalgaem-view-vote-li');

  // 각 li 요소에 대한 처리를 수행합니다.
  liVote.forEach(li => {
    // .nalgaem-view-vote-bar 요소와 .nalgaem-view-vote-txt 요소를 선택합니다.
    const voteBar = li.querySelector('.nalgaem-view-vote-bar');
    const voteTxt = li.querySelector('.nalgaem-view-vote-txt');

    // .nalgaem-view-vote-bar의 넓이와 .nalgaem-view-vote-txt의 넓이를 비교합니다.
    const voteBarWidth = parseFloat(getComputedStyle(voteBar).width);
    const voteTxtWidth = parseFloat(getComputedStyle(voteTxt).width);

    // 넓이 비교를 통해 적절한 스타일을 적용합니다.
    if (voteBarWidth > voteTxtWidth) {
      // .nalgaem-view-vote-bar가 더 길 경우
      voteTxt.style.color = 'white';
    } else {
      // .nalgaem-view-vote-bar가 더 짧을 경우
      voteTxt.style.color = '#333';
    }
  });


  // 인트로페이지
  $('.intro-page').addClass('on');

  if ($('.intro-page').hasClass('on')) {
    $('body, html, .container').addClass('scroll-lock');

    $('body').on('scroll touchmove mousewheel wheel DOMMouseScroll', function (event) {
      event.preventDefault();
      event.stopPropagation();
      return false;
    });

    $('.intro-page').on('scroll touchmove mousewheel wheel DOMMouseScroll', function () {
      $(this).addClass('animation');

      // setTimeout(function () {
      //   $('.intro-page .mainvs-txt.black img').css('opacity', '0').stop(0).attr('src', './source/img/icon-flower_white.png').animate({
      //     opacity: 1
      //   }, 500);
      // }, 1000);

      // 메인 슬라이드 다운 이미지
      $('.mainvs-scroll-down').css('opacity', '0').stop(0).animate({
        opacity: 1
      }, 1000);

      // 애니메이션이 끝난 뒤 스크롤락 해제
      setTimeout(function () {
        $('body, html, .container').removeClass('scroll-lock');
        $('body').off('scroll touchmove mousewheel wheel DOMMouseScroll');
        $('.intro-page').removeClass('on');
      }, 2000);
    });

  } else {
    $('body, html, .container').removeClass('scroll-lock');
    $('body').off('scroll touchmove mousewheel wheel DOMMouseScroll');
  }


  // 탑버튼
  $('body').on('click', '.main-foot-top', function () {
    $('html, body').animate({
      scrollTop: 0
    }, 400);
  });


  //메인 fullpage
  $('#fullpage').fullpage({
    anchors: ['page01', 'page02', 'page03', 'page04', 'page05', 'foot'],
    autoScrolling: true,
    // navigation: true,
    keyboardScrolling: true,
    navigationPosition: 'left',
    // navigationTooltips: ['MAIN', 'SCROLL IMAGE', 'MOZAIC SERVICE', 'PRICE & TECHNICAL INQUIRY'],
    sectionSelector: '.mainsec',
    // responsiveWidth: 767,
    'afterLoad': function (anchorLink, index) {
      // if ($(window).width() > 767) {
      if (index == 1) {
        $('header').removeClass('black');
        $('header').addClass('white');

      } else if (index == 2) {
        $('header').removeClass('white');
        $('header').addClass('black');

      } else if (index == 3) {
        $('header').removeClass('white');
        $('header').addClass('black');

      } else if (index == 4) {
        $('header').removeClass('white');
        $('header').addClass('black');

      } else if (index == 5) {
        $('header').removeClass('white');
        $('header').addClass('black');
      } else if (index == 6) {
        $('header').removeClass('black');
        $('header').addClass('white');
      }
    }
    // },
  });

  // 헤더 메뉴 오버
  if ($(window).width() > 1440) {
    $('body').on('mouseenter focus', '.hd-gnb-li', function () {
      $(this).find('.hd-gnb2-ul').stop().slideDown(200);
    });
    $('body').on('mouseleave', '.hd-gnb-li', function () {
      $(this).find('.hd-gnb2-ul').stop().slideUp(200);
    });
  }


  // 헤더 검색버튼
  $('body').on('click', '.hd-sch-open', function () {
    if ($('.hd-tnb-li--sch').hasClass('on')) {
      $('.hd-sch-form').stop().fadeOut();
      $('.hd-tnb-li--sch').removeClass('on');
    } else {
      $('.hd-sch-form').stop().fadeIn();
      $('.hd-tnb-li--sch').addClass('on');
    };
  });

  // 헤더 검색영역 외 클릭시 검색박스 사라짐
  if ($(window).width() > 1440) {
    $(document).on('mouseup focusout', function (e) {
      if ($(".hd-tnb-li--sch").has(e.target).length === 0) {
        $('.hd-sch-form').stop().fadeOut();
        $('.hd-tnb-li--sch').removeClass('on');
      }
    });
  }

  // 헤더 언어 변경
  $('body').on('click', '.hd-lang-btn', function () {
    $('.hd-lang-ul').stop().slideToggle();
  });

  // 헤더 언어 버튼 외 클릭시 검색박스 사라짐
  // if ($(window).width() > 1440) {
  $(document).on('mouseup focusout', function (e) {
    if ($(".hd-tnb-li--lang").has(e.target).length === 0) {
      $('.hd-lang-ul').stop().fadeOut();
      $('.hd-tnb-li--lang').removeClass('on');
    }
  });
  // }

  // 헤더 마이페이지 버튼
  $('body').on('click', '.gotoMypage', function () {
    $('.hd-my-ul').stop().slideToggle();
  });

  // 헤더 마이페이지 버튼 외 클릭시 검색박스 사라짐
  // if ($(window).width() > 1440) {
  $(document).on('mouseup focusout', function (e) {
    if ($(".hd-tnb-li--login").has(e.target).length === 0) {
      $('.hd-my-ul').stop().fadeOut();
      $('.hd-tnb-li--login').removeClass('on');
    }
  });
  // }

  // 모바일 헤더
  $('body').on('click', '.hd-ham', function () {
    if ($(this).hasClass('on')) {
      $(this).removeClass('on');
      $('.hd-menu').fadeOut();
      $('.hd-gnb2-ul').slideUp();
      $('.hd-gnb-li').removeClass('open');

    } else {
      $(this).addClass('on');
      $('.hd-menu').fadeIn();
    }
  });


});