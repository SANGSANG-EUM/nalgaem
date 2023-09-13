<?php
if(!defined('_BLUEVATION_')) exit;
include_once(BV_PATH.'/include/board_category.php');
?>

<div class="subwr">
	<!-- 게시판 분류 { -->	
		<?php boardCategory(0); ?>
	<!-- } 게시판 분류 -->
	<form name="fboardform" action="del.php" method="post" onsubmit="return fboardform_submit(this);">
	<input type='hidden' name="index_no" value="<?php echo $index_no; ?>">
	<input type="hidden" name="boardid" value="<?php echo $boardid; ?>">
	<input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
	<input type="hidden" name="stx" value="<?php echo $stx; ?>">
	<input type="hidden" name="page" value="<?php echo $page; ?>">
	<input type="hidden" name="mode" value="d">
	
	<?php if($is_member) { ?>
	<div class="del_box">
		<div class="del_in">
			한번 삭제된 데이터는 복구되지 않습니다.<br>삭제 하시려면 삭제하기 버튼을 누르세요.
			<p class="mart15">
				<input type="submit" value="삭제" class="btn_large">
				<a href="javascript:history.go(-1);" class="btn_large bx-white">취소</a>
			</p>
		</div>
	</div>
	<?php } else { ?>
	<div class="del_box">
		<div>
			한번 삭제된 데이터는 복구되지 않습니다.<br>아래 비밀번호를 입력하여 주십시오.
			<p class="mart15">
				<input name="passwd" type="password" class="frm_input">
				<input type="submit" value="삭제" class="btn_large">
			</p>
		</div>
	</div>
	<?php } ?>
	</form>
</div>

<script>
function fboardform_submit()
{
	<?php if(!$is_member) { ?>
	if(!f.passwd.value) {
		alert('비밀번호를 입력하세요.');
		f.passwd.focus();
		return false;
	}
	<?php } ?>

	if(answer==true)
	{	return true;	}
	else
	{	return false;	}

}
</script>