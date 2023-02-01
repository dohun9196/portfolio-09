<?php
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/tail.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/shop.tail.php');
    return;
}
?>





<footer id="footer">
    <div class="inner">
        <div class="f_logo">
            <img src="<?php echo G5_THEME_URL ?>/img/f_logo.png" alt="">
        </div>
    </div>
    <div class="flex_inner">
        <div class="f_left">

            <ul>
                <li><a href="#!">개인정보처리방침</a></li>
                <li><a href="#!">창업상담문의</a></li>
                <li><a href="#!">점주님공간</a></li>
            </ul>
            <address>
                <span>대표 : 조현홍</span>
                <span>업체명 : (주)채정</span>
                <span>사업자등록번호 : 296-81-01195</span>
                <br>
                <br>
                <span>부산본사 : 부산광역시 금정구 중앙대로 2073 2층</span>
                <span>서울지사 : 금천구 시흥대로2가길6, 2층</span>
            </address>
            <div class="copy">&copy; Copyright 2016 - 2021 All Rights Reserved.</div>
        </div>
        <div class="f_right">
            <div class="f_tel">
                <strong><i class="xi-call"></i>주문 및 가맹문의 <b>1668-2707</b></strong>
            </div>
            <div class="f_sns">
                <a href=""><img src="<?php echo G5_THEME_URL ?>/img/btn_blog.png" alt=""></a>
                <a href=""><img src="<?php echo G5_THEME_URL ?>/img/btn_instagram.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<div id="top_btn_my">
    <a href="">
        <img src="<?php echo G5_THEME_URL ?>/img/btn_top.jpg" alt="">
    </a>
</div>
</div>

<script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>



<?php
if (G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
    $(function () {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
    });
</script>

<?php
include_once(G5_THEME_PATH . "/tail.sub.php");