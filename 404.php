<?php

get_header(); ?>

<div id="contents">

    <section id="mv">
        <h2 class="mv_ttl">
            <span>404</span>
            <span>404 Not Found</span>
        </h2>
        <div class="mv_img">
            <ul class="bxslider bg_img">
                <li><img src="<?= WSTD_ASSETS_URI ?>/other/img/other_common_mv_img01.jpg" alt=""></li>
            </ul>
        </div>
    </section>

    <section id="content">
        <div class="cnt_block">
            <h3 class="cnt_ttl">ページが見つかりませんでした</h3>
            <p class="ta_center mgb40">URLに間違いがないか、再度確認してください。再読み込みしてください。</p>
            <ul class="cnt_btn ta_center">
                <li><a href="/"><span class="link_icon link_icon_arrow">TOPへ戻る</span></a></li>
            </ul>
        </div>
    </section>

</div><!-- /#contents -->

<?php

get_footer();
