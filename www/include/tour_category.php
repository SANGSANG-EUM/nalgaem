<?php
include_once('./_common.php');

function tourCategory($active){
    $sub_tab = '';
        $sub_tab .= "/sub/tour_main.php|전체,";
        $sub_tab .= "/sub/tour_sight.php|관광지,";
        $sub_tab .= "/sub/tour_culture.php|문화시설,";
        $sub_tab .= "/sub/tour_festival.php|축제,";
        $sub_tab .= "/sub/tour_event.php|행사,";
        $sub_tab .= "/sub/tour_show.php|공연";

    $sub_tab01 = explode(",", $sub_tab);
?>

<ul class="sub-cate-ul tour-cate-ul">
    <?php
    for ($i = 0; $i < count($sub_tab01); $i++) {
        $sub_tab02 = explode("|", $sub_tab01[$i]);
        ?>
        <li class="sub-cate-li tour-cate-li <?=$active==$i?'active':'';?>"><a href="<?=$sub_tab02[0]?>"><?=$sub_tab02[1]?></a></li>
    <?php } ?>
</ul>

<?php } ?>

