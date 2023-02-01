<section class="brandNav">
    <!-- 브랜드 페이지용 -->
    <div id="br_inner" class="inner">
        <h2>브랜드</h2>
        <p>정직함을 담아 유부를 만드는 정직유부를 소개합니다.</p>
    </div>
    <div id="br_nav" class="b_nav">
        <ul>
            <li><a href="<?php echo G5_THEME_URL ?>/doc/brand01.php">브랜드스토리</a></li>
            <li><a href="<?php echo G5_THEME_URL ?>/doc/brand02.php">메뉴스토리</a></li>
            <li><a href="#!">PEOPLE</a></li>
        </ul>
    </div>
    <!-- 커뮤니티 페이지용 -->
    <div id="co_inner" class="inner">
        <h2>커뮤니티</h2>
        <p>정직유부의 다양한 소식을 전해드립니다.</p>
    </div>
    <div id="co_nav" class="b_nav">
        <ul>
            <li><a href="/bbs/board.php?bo_table=jj_com">정직유부 소식</a></li>
            <li><a href="bbs/board.php?bo_table=jj_qa">고객센터</a></li>
        </ul>
    </div>
</section>

<script>


    var pageUrl = window.location.href; // url을 가져온다.
    $(window).on('load', function () {
        $('.brandNav .inner', '.b_nav').removeClass('on');

        if (pageUrl.indexOf('brand') > -1) {
            $('#br_inner', '#br_nav').eq(0).addClass('on');
        } else if (pageUrl.indexOf('jj_') > -1) {
            $('#co_inner', '#co_ban').eq(0).addClass('on');
        }
    });




    $(window).on('load', function () { // load가 되었을때 실행
        $('.b_nav li').siblings('li').removeClass('on'); // 다른 on 있으면 지워준다.

        if (pageUrl.indexOf('brand01') > -1) { // url에 brand01 글자가 있으면 실행
            $('.b_nav li').eq(0).addClass('on');
        } else if (pageUrl.indexOf('brand02') > -1) { // url에 brand02 글자가 있으면 실행
            $('.b_nav li').eq(1).addClass('on');
        }
    });

    $(window).on('load', function () {
        $('.b_nav li').siblings('li').removeClass('on');

        if (pageUrl.indexOf('jj_com') > -1) {
            $('.b_nav li').eq(0).addClass('on');
        } else if (pageUrl.indexOf('jj_qa') > -1) {
            $('.b_nav li').eq(1).addClass('on');
        }
    });


</script>