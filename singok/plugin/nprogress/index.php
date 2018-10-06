<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
	
//프로그레스바 시작	2017-06-29 아총 https://github.com/rstacruz/nprogress
add_stylesheet('<link rel="stylesheet" href="'.G5_URL.'/plugin/nprogress/nprogress.css">', 0);
add_javascript('<script src="'.G5_URL.'/plugin/nprogress/nprogress.js"></script>', 0);
?>
<script>
	$('body').show();
	NProgress.start();
	setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
</script>
