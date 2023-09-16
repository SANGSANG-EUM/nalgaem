<?php
if (!defined('_GNUBOARD_')) {
    exit;
}
require_once G5_PATH . '/head.sub.php';

if (!$member['mb_id']) {
   alert('생성되지 않은 관리자입니다.', G5_URL);
}

?>
<?php echo $member['mb_id'] ?>님 관리자	
