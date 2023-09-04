<?php
if(!defined("_BLUEVATION_")) exit; // 개별 페이지 접근 불가

$g_conf_home_dir  = BV_SHOP_PATH.'/kcp'; // BIN 절대경로 입력 (bin전까지)
$g_conf_site_name = $config['company_name'];
$g_conf_log_level = '3'; // 변경불가
$g_conf_gw_port   = '8090'; // 포트번호(변경불가)

$g_conf_key_dir   = '';

/*=======================================================================
 KCP 결제처리 로그파일 생성을 위한 로그 디렉토리 절대 경로를 지정합니다.
 로그 파일의 경로는 웹에서 접근할 수 없는 경로를 지정해 주십시오.
 영카트5의 config.php 파일이 존재하는 경로가 /home/test/www 라면
 로그 디렉토리는 /home/test/log 등으로 지정하셔야 합니다.
 로그 디렉토리에 쓰기 권한이 있어야 로그 파일이 생성됩니다.
=======================================================================*/
$g_conf_log_dir = '/home100/kcp'; // 존재하지 않는 경로를 입력하여 로그 파일 생성되지 않도록 함.

if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
{
    $g_conf_key_dir = BV_SHOP_PATH.'/kcp/bin/pub.key';
}

if($default['de_card_test']) {
    // 결제 테스트
    if($default['de_escrow_use'] == 1) {
        // 에스크로결제 테스트
        $default['de_kcp_mid'] = "T0007";
        $default['de_kcp_site_key'] = '4Ho4YsuOZlLXUZUdOxM1Q7X__';
    }
    else {
        // 일반결제 테스트
        $default['de_kcp_mid'] = "T0000";
        $default['de_kcp_site_key'] = '3grptw1.zW0GSo4PQdaGvsF__';
    }
    $g_wsdl = "KCPPaymentService.wsdl";
    $g_conf_gw_url = "testpaygw.kcp.co.kr";
}
else {
    $g_wsdl = "real_KCPPaymentService.wsdl";
    $g_conf_gw_url = "paygw.kcp.co.kr";
}

$g_conf_site_cd = $default['de_kcp_mid'];
$g_conf_site_key = $default['de_kcp_site_key'];

// 테스트 결제 때 PAYCO site_cd, site_key 재설정
if($default['de_card_test'] && ($_POST['settle_method'] == '간편결제' || $_POST['od_settle_case'] == '간편결제')) {
    $g_conf_site_cd = 'S6729';
    $g_conf_site_key = '';
}

// KCP SITE KEY 입력 체크
if($default['de_iche_use'] || $default['de_vbank_use'] || $default['de_hp_use'] || $default['de_card_use']) {
    if(trim($default['de_kcp_site_key']) == '')
        alert('KCP SITE KEY를 입력해 주십시오.');
}
?>