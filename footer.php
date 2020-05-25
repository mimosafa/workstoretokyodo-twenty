<?php

?>

<!-- START #footer -->
<footer id="footer">
    <div class="footer_pagetop"><a href="">PAGE TOP</a></div>

    <div class="footer_inner">
        <ol class="footer_breadcrumbs">
            <li><a href="<?= WSTD_HOME_URI ?>">トップページ</a></li><?= workstoretokyodo_breadcrumb( "\n\t\t\t<li>" ); ?>
        </ol>

        <nav class="footer_sitemap clearfix">
            <dl class="footer_sitemap_tokyodo">
                <dt><a href="/">Workstore Tokyo Do | ワークストア・トウキョウドゥ</a></dt>
                <dd>
                    <p>〒146-0094 東京都大田区東矢口三丁目30番14号</p>
                    <ul class="footer_sitemap_tokyodo_links">
                        <li class="footer_sitemap_tokyodo_links_tel"><a href="tel:03-3737-3000">03-3737-3000</a></li>
                        <li class="footer_sitemap_tokyodo_links_mail"><a href="/contact/">お問い合わせ</a></li>
                    </ul>
                </dd>
            </dl>
            <ul class="footer_sitemap_brand">
                <li class="footer_sitemap_brand_direct"><a href="/direct/">DIRECT MANAGEMENT</a></li>
                <li class="footer_sitemap_brand_neostall"><a href="/neostall/">ネオ屋台村</a></li>
                <li class="footer_sitemap_brand_neoponte"><a href="<?= NEOPONTE_HOME_URL ?>">ネオポンテ</a></li>
                <li class="footer_sitemap_brand_sharyobu"><a href="/sharyobu/">車両部</a></li>
            </ul>
        </nav>
    </div>

    <div class="footer_credit">
        <p>Copyright &copy; 2010-<script type="text/javascript">var nowDate = new Date(); var dateYear = nowDate.getFullYear(); document.write(dateYear)</script> WorkStore Tokyo Do.<br>All Rights Reserved.</p>
    </div>
</footer>
<!-- //END #footer -->

<?php wp_footer(); ?>

</body>
</html>
