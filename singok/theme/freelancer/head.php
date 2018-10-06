<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once G5_THEME_MOBILE_PATH.'/head.php';
    return;
}
include_once G5_LIB_PATH.'/thumbnail.lib.php';
include_once G5_THEME_PATH.'/head.sub.php';
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo !defined('_INDEX_') ? G5_URL.'/' : '#page-top'?>">GS.HN Interactive</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="<?php echo !defined('_INDEX_') ? G5_URL.'/' : ''?>#portfolio">프로젝트</a>
                </li>
                <li class="page-scroll">
                    <a href="<?php echo !defined('_INDEX_') ? G5_URL.'/' : ''?>#about">회사소개</a>
                </li>
                <li class="page-scroll">
                    <a href="<?php echo !defined('_INDEX_') ? G5_URL.'/' : ''?>#contact">연락처</a>
                </li>
                <li class="page-scroll">
                    <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=board" class="<?php echo $bo_table == 'board' ? 'active' : ''?>">게시판</a>
                </li>
                <?php if($is_guest) { ?>
                <li class="page-scroll">
                    <a href="<?php echo G5_BBS_URL?>/login.php" class="<?php echo $PHP_SELF == '/bbs/login.php' ? 'active' : ''?>">로그인</a>
                </li>
                <?php } else { ?>
                <li class="page-scroll">
                    <a href="<?php echo G5_BBS_URL?>/logout.php">로그아웃</a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div id="container">