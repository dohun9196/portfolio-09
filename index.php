<?php
if (!defined('_INDEX_'))
    define('_INDEX_', true);
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/index.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/index.php');
    return;
}

include_once(G5_THEME_PATH . '/head.php');
?>

<main>
    <section class="mainVisual" id="mainVisual">
        <div class="main_slide">
            <figure>
                <h2>유부에 <b>정직함</b>을 담다<br>
                    <strong>정직유부</strong>
                </h2>
            </figure>
            <!-- <figure>
                        <div class="inner">
                            <span class="ms_span">진짜만 모았다.</span>
                            <b class="ms_b">정직유부베스트<br>
                                3가지맛 유부3P + 면세트
                            </b>
                            <p class="ms_p">매일 10개 한정판매, 인기유부 3종을<br>
                                한 번에 즐길 수 있는 특별한 세트</p>
                        </div>
                    </figure> -->
            <figure>
                <h2>유부에 <b>생각</b>을 담다<br>
                    <strong>정직유부</strong>
                </h2>
            </figure>
        </div>
        <div class="sc_down">
            <a href="#!">
                <i class="xi-mouse"></i>
            </a>
        </div>
    </section>

    <section class="subContent01 sec">
        <div class="inner">
            <div class="top_text">
                정직유부는, 합니다.
            </div>
            <h2 class="subcon_h2">
                <strong>정직을</strong> 지키기 위해<strong> 행동</strong>합니다.
            </h2>
            <p class="subcon_p">
                우리의 정직이, 이름에만 머무르지 않도록.<br>
                지역사회 기부를 통해 정직한 사랑의 가치를 나누고 있습니다.
            </p>
            <div class="subcon_bottom">
                <div class="sbc_box">
                    <strong>378</strong><span>&nbsp;&nbsp;곳의</span>
                    <p>기부처</p>
                </div>
                <div class="sbc_box">
                    <strong>131,720</strong><span>&nbsp;&nbsp;개의</span>
                    <p>유부초밥</p>
                </div>
                <div class="sbc_box">
                    <strong>32,930</strong><span>&nbsp;&nbsp;인분의</span>
                    <p>사랑</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mainSocial sec">
        <div class="inner">
            <div class="flex_social_tit">
                <div class="soc_left">
                    <span>Social Network</span>
                    <strong>정직유부 SNS</strong>
                </div>
                <div class="soc_right">
                    정직유부와 함께하는 이야기 공간, <strong>정직유부 공식 인스타그램</strong>입니다.
                </div>
            </div>
            <div class="social_slide">
                <figure><img src="<?php echo G5_THEME_URL ?>/img/sns_slide01.jpg" alt=""></figure>
                <figure><img src="<?php echo G5_THEME_URL ?>/img/sns_slide02.jpg" alt=""></figure>
                <figure><img src="<?php echo G5_THEME_URL ?>/img/sns_slide03.jpg" alt=""></figure>
                <figure><img src="<?php echo G5_THEME_URL ?>/img/sns_slide04.jpg" alt=""></figure>
                <figure><img src="<?php echo G5_THEME_URL ?>/img/sns_slide05.jpg" alt=""></figure>
                <figure><img src="<?php echo G5_THEME_URL ?>/img/sns_slide06.jpg" alt=""></figure>
            </div>
        </div>

    </section>
    <div class="mainBanner">
        <a href="https://gift.kakao.com/brand/14228?input_channel_id=2631" target="_blank">
            <div class="flex_inner">
                <div class="banner_icon">
                    <img src="<?php echo G5_THEME_URL ?>/img/kakao_gift.png" alt="">
                </div>
                <div class="banner_text">
                    <strong>정직유부 카카오톡 선물하기 입점</strong>&nbsp;&nbsp;<span>소중한 사람에게 마음을 전하세요</span>
                </div>
            </div>
        </a>
    </div>
    <section class="subContent02 sec">
        <div class="inner">
            <div class="top_text">
                정직유부는, 합니다.
            </div>
            <h2 class="subcon_h2">
                <strong>정직을</strong> 지키기 위해<strong> 함께</strong>합니다.
            </h2>
            <p class="subcon_p">
                우리의 정직을 함께 지켜줄 수 있는.<br>
                다양하고 정직한 파트너사와 함께합니다.
            </p>
            <div class="flex_subcon">
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/partners01.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/partners02.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/partners03.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/partners04.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/partners05.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/partners06.jpg" alt="">
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/partners07.jpg" alt="">
                </figure>
            </div>
    </section>

    <section class="mainOpen">
        <div class="inner">
            <h2 class="subcon_h2">신규오픈매장</h2>
            <div class="open_slide">
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/newopen01.jpg" alt="">
                    <div class="store_name">
                        <p>01.05 호매실점</p>
                    </div>
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/newopen02.jpg" alt="">
                    <div class="store_name">
                        <p>01.19 동탄호수공원점</p>
                    </div>
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/newopen03.jpg" alt="">
                    <div class="store_name">
                        <p>12.15 대구다사점</p>
                    </div>
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/newopen04.jpg" alt="">
                    <div class="store_name">
                        <p>12.22 광주화정점</p>
                    </div>
                </figure>
                <figure>
                    <img src="<?php echo G5_THEME_URL ?>/img/newopen05.jpg" alt="">
                    <div class="store_name">
                        <p>12.22 대구시지점</p>
                    </div>
                </figure>
            </div>
        </div>
    </section>
</main>


<?php
include_once(G5_THEME_PATH . '/tail.php');
?>