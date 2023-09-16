<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>
<footer class="footer sub-foot">
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
			<a href="javascript:void(0);" class="main-foot-top">
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
<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");