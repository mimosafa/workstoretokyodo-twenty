<?php

?><!doctype html>
<html lang="jp">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?= esc_attr( workstoretokyodo_meta_description() ) ?>">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width">

<meta property="og:title" content="<?= esc_attr( wp_get_document_title() ) ?>">
<meta property="og:description" content="<?= esc_attr( workstoretokyodo_meta_description() ) ?>">
<meta property="og:url" content="<?= esc_url( workstoretokyodo_meta_url() ) ?>">
<meta property="og:type" content="website"/>
<meta property="og:image" content="<?= esc_url( workstoretokyodo_meta_image() ) ?>">

<link rel="canonical" href="<?= esc_url( workstoretokyodo_meta_url() ) ?>">
<link rel="shortcut icon" href="<?= WSTD_ASSETS_URI ?>/common/icon/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?= WSTD_ASSETS_URI ?>/common/icon/apple-touch-icon.png">

<?php wp_head(); ?>

</head>

<body <?php if ( is_home() ) { body_class( 'top_page' ); } else { body_class(); } ?>>

<!-- START #header -->
<noscript>
    <p class="header_noscript">ウェブブラウザの設定でJavaScriptを有効にしてご利用ください。</p>
</noscript>

<header id="header">
    <div class="header_inner">
        <h1 class="header_site_ttl"><a href="<?= WSTD_HOME_URI ?>"><?= WSTD_HOME_NAME ?></a></h1>
        <nav class="header_gnav">
            <div class="header_gnav_inner">
                <ul class="header_gnav_brand">
                    <li class="header_gnav_brand_direct"><a href="<?= WSTD_HOME_URI ?>/direct/">DIRECT MANAGEMENT</a></li>
                    <li class="header_gnav_brand_neostall"><a href="<?= WSTD_HOME_URI ?>/neostall/">ネオ屋台村</a></li>
                    <li class="header_gnav_brand_neoponte"><a href="<?= NEOPONTE_HOME_URL ?>">ネオポンテ</a></li>
                    <li class="header_gnav_brand_sharyobu"><a href="<?= WSTD_HOME_URI ?>/sharyobu/">車両部</a></li>
                </ul>
                <ul class="header_gnav_menu">
                    <li><a href="<?= WSTD_HOME_URI ?>/company/"><span>会社概要</span></a></li>
                    <li><a href="<?= WSTD_HOME_URI ?>/terms/"><span>ご利用にあたって</span></a></li>
                    <li><a href="<?= WSTD_HOME_URI ?>/contact/"><span>お問い合わせ</span></a></li>
                </ul>
                <ul class="header_gnav_other">
                    <li class="header_gnav_other_facebook" target="_blank">
                        <a href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.w-tokyodo.com%2Fneostall%2Freds%2F" target="_blank">Facebook</a>
                    </li>
                    <li class="header_gnav_other_twitter" target="_blank">
                        <a href="https://twitter.com/share">Twitter</a>
                    </li>
                    <li class="header_gnav_other_contact">
                        <a href="/contact/">お問い合わせ</a>
                    </li>
                </ul>
                <div class="header_gnav_btn">
                    <a href="">
                        <span class="header_gnav_btn_ttl">Menu</span>
                        <span id="header_gnav_btn_bar01" class="header_gnav_btn_bar"></span>
                        <span id="header_gnav_btn_bar02" class="header_gnav_btn_bar"></span>
                        <span id="header_gnav_btn_bar03" class="header_gnav_btn_bar"></span>
                    </a>
                </div>
            </div>
        </nav>
        <?php /*<nav class="header_lnav">
            <div class="header_lnav_inner clearfix">
                <h2 class="header_lnav_ttl"><a href="<?= esc_url( home_url() ) ?>"><?php esc_html( bloginfo( 'name' ) ); ?></a></h2>
                <ul class="header_lnav_menu">
                    <li><a href="<?= esc_url( home_url() ) ?>/oshinagaki/">お品書き</a></li>
                    <li><a href="<?= esc_url( home_url() ) ?>/about/">千葉らぁ麺とは？</a></li>
                    <li><a href="<?= esc_url( home_url() ) ?>/about/access/">アクセス</a></li>
                </ul>
                <div class="header_lnav_btn"><a href="">メニュー</a></div>
            </div>
        </nav> */ ?>
    </div>
</header>

<div class="header_overlay"></div>
<!-- //END #header -->

<!-- START #loader -->
<div id="loader"></div>
<!-- //END #loader -->
