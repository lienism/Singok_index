<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once G5_THEME_MOBILE_PATH.'/index.php';
    return;
}
include_once G5_THEME_PATH.'/head.php';
?>

<!-- Header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive wow zoomIn" src="http://sir.gs.hn/freelancer/img/profile.png" alt="">
                <div class="intro-text">
                    <span class="name wow fadeInDown" data-wow-delay="1s">GS.HN Interactive</span>
                    <hr class="star-light wow zoomIn">
                    <span class="skills wow fadeInUp" data-wow-delay="1.5s">유려하고 실용적인 디자인과 편리하고 직관적인 UX / UI를 추구하는 대구 웹에이전시 GS.HN 입니다.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>프로젝트</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <?php
            $bo_table = 'board';
            $sql = "SELECT * FROM g5_write_{$bo_table}
                    WHERE wr_is_comment = '0'
                    ORDER BY wr_num
                    LIMIT 0, 6";
            $rst = sql_query($sql);
            $board = array('bo_table' => $bo_table);
            $i = 0;
            while($row = sql_fetch_array($rst)) {
                $row = get_list($row, $board, G5_URL);
                $thumbnail = get_list_thumbnail($bo_table, $row['wr_id'], 900, 650);
            ?>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal<?php echo $i?>" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $thumbnail['src']?>" class="img-responsive img-centered" alt="<?php echo $thumbnail['alt']?>">
                </a>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $i?>" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:9999">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2><?php echo $row['subject']?></h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo $thumbnail['src']?>" class="img-responsive img-centered" alt="<?php echo $thumbnail['alt']?>">
                                    <p><?php echo conv_content($row['wr_content'], 2)?></p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><?php echo $row['name']?>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><?php echo date('F d, Y', strtotime($row['wr_datetime']))?>
                                            </strong>
                                        </li>
                                        <li>Category:
                                            <strong><?php echo $row['ca_name']?>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i += 1;
            } ?>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="wow fadeInDown" data-wow-delay=".5s">회사소개</h2>
                <hr class="star-light wow zoomIn">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p class="wow fadeInUp" data-wow-delay=".5s">가장 보편적인 아름다움은 시간의 흐름에 영향을 받지 않습니다. 수십 년 동안 그 새로움을 유지하며 실용성까지 갖춘 디자인은 우리가 추구하는 창조의 핵심입니다. 소중함을 간직한 채 조용히 그 자리에 머무르며 존재감을 뽐내고 있을 웹 사이트를 상상해보세요. 당신과 기업의 아름다움을 널리 세상에 알려드립니다.</p>
            </div>
            <div class="col-lg-4">
                <p class="wow fadeInUp" data-wow-delay=".7s">아름답고 편리한 디자인을 통해서 무엇 하나 빠지지 않는 완벽한 사용자 경험을 구현하는 것. 지역 에이전시가 갖추지 못한 디자인에 대한 가치 해석을 새롭게 구상해야만 했습니다. 단순한 에이전시를 넘어서서 작은 것 하나에도 디자인적인 철학을 심는 GS.HN은 대구 에이전시의 새로운 미래를 만들어갑니다.</p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="http://gs.hn" class="btn btn-lg btn-outline wow bounceIn" data-wow-delay="1s">
                    <i class="fa fa-home"></i> 아름다움을 찾아서!
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="wow fadeInDown" data-wow-delay=".5s">연락처</h2>
                <hr class="star-primary wow zoomIn">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" name="message" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>