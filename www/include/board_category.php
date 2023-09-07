<?php
include_once('./_common.php');

function boardCategory($active){
    $sub_tab = '';
        $sub_tab .= "/bbs/list.php?boardid=13|공지사항,";
        $sub_tab .= "/bbs/list.php?boardid=41|이벤트,";
        $sub_tab .= "/bbs/list.php?boardid=21|FAQ";

    $sub_tab01 = explode(",", $sub_tab);
?>

<ul class="sub-cate-ul board-cate-ul">
    <?php
    for ($i = 0; $i < count($sub_tab01); $i++) {
        $sub_tab02 = explode("|", $sub_tab01[$i]);
        ?>
        <li class="sub-cate-li board-cate-li <?=$active==$i?'active':'';?>"><a href="<?=$sub_tab02[0]?>"><?=$sub_tab02[1]?></a></li>
    <?php } ?>
</ul>

<?php } ?>

