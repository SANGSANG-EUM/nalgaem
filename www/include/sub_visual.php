<?php
include_once('./_common.php');

function subVis($sub){
    switch ($sub){
        case 'tour':
            $sub_tit = "날갬 TOUR";
            $sub_txt = "날갬에서 다양한 관광지와 축제 등의 현장을 확인해보세요.";
            break;
        case 'cafe':
            $sub_tit = "날갬 with 카페";
            $sub_txt = "날갬에서 다양한 신규 카페를 확인해보세요.";
            break;
        case 'community':
            $sub_tit = "소통해요 날갬";
            $sub_txt = "날갬의 새로운 소식과 다양한 이벤트를 확인해보세요.";
            break;
        default:
            $sub_tit = ""; // 기본값 설정
            $sub_txt = ""; // 기본값 설정
            break;
    }
?>

<div class="sub-visual sub-visual-<?=$sub?>">
    <div class="sub-visual-bg">
        <div class="sub-visual-txt-wr">
            <p class="sub-visual-txt1"><?=$sub_tit?></p>
            <p class="sub-visual-txt2"><?=$sub_txt?></p>
        </div>
    </div>
</div>
<?php } ?>
