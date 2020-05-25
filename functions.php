<?php

define( 'WSTD_THEME_VER', time() );

define( 'WSTD_HOME_URI', esc_url( '//www.w-tokyodo.com' ) );
define( 'WSTD_HOME_NAME', esc_html( 'Workstore Tokyo Do | ワークストア・トウキョウドゥ' ) );

define( 'WSTD_ASSETS_URI', esc_url( get_stylesheet_directory_uri() . '/assets' ) );

/**
 * ネオポンテのURL
 */
define( 'NEOPONTE_HOME_URL', 'https://www.w-tokyodo.com/neoponte/' );

require_once __DIR__ . '/inc/functions.php';

/**
 * とりあえずのハック
 */
require_once __DIR__ . '/hack/redirects.php';

/**
 * Enqueue styles & scripts
 */
add_action( 'wp_enqueue_scripts', function() {
    /**
     * Styles
     */
    wp_register_style( 'reset', WSTD_ASSETS_URI . '/common/css/reset.css', [], WSTD_THEME_VER );
    wp_register_style( 'bxslider', WSTD_ASSETS_URI . '/common/css/jquery.bxslider.css', ['reset'], WSTD_THEME_VER );
    wp_register_style( 'fancybox', WSTD_ASSETS_URI . '/common/css/jquery.fancybox.css', ['reset'], WSTD_THEME_VER );
    wp_register_style( 'wstd_common', WSTD_ASSETS_URI . '/common/css/common.css', ['bxslider', 'fancybox'], WSTD_THEME_VER );
    wp_register_style( 'wstd_parts', WSTD_ASSETS_URI . '/common/css/parts.css', ['wstd_common'], WSTD_THEME_VER );
    # wp_register_style( 'chibaramen', WSTD_ASSETS_URI . '/chibaramen/css/chibaramen.css', ['wstd_common', 'wstd_parts'], WSTD_THEME_VER );
    // enqueue
    wp_enqueue_style( 'wstd_parts' );

    /**
     * Scripts
     */
     wp_deregister_script( 'jquery' );
     wp_register_script( 'jquery', WSTD_ASSETS_URI . '/common/js/jquery-1.12.4.min.js', [], WSTD_THEME_VER );
     wp_register_script( 'easing', WSTD_ASSETS_URI . '/common/js/jquery.easing.1.3.js', ['jquery'], WSTD_THEME_VER );
     wp_register_script( 'bxslider', WSTD_ASSETS_URI . '/common/js/jquery.bxslider.min.js', ['jquery'], WSTD_THEME_VER );
     wp_register_script( 'fancybox', WSTD_ASSETS_URI . '/common/js/jquery.fancybox.min.js', ['jquery'], WSTD_THEME_VER );
     wp_register_script( 'wstd_common', WSTD_ASSETS_URI . '/common/js/common.js', ['easing', 'bxslider', 'fancybox'], WSTD_THEME_VER );
     // enqueue
     wp_enqueue_script( 'wstd_common' );

     if ( is_home() ) {
         wp_enqueue_style( 'top', WSTD_ASSETS_URI . '/top/css/top.css', ['wstd_common', 'wstd_parts'], WSTD_THEME_VER );
         wp_enqueue_script( 'top', WSTD_ASSETS_URI . '/top/js/top.js', ['wstd_common'], WSTD_THEME_VER );
     }

     if ( is_page( 'contact' ) ) {
        $cssCDN = '//stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css';
        $jsCDN  = '//stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js';
        wp_enqueue_style( 'bootstrap', $cssCDN, [], '3.3.5' );
        wp_enqueue_script( 'bootstrap', $jsCDN, [ 'jquery' ], '3.3.5', false );
        // Overwrite style
        wp_enqueue_style( 'contact', WSTD_ASSETS_URI . '/top/css/contact.css', ['bootstrap'], WSTD_THEME_VER );
     }

     /**
      * Google Analytics
      */
     wp_enqueue_script( 'ga', WSTD_ASSETS_URI . '/common/js/ga.js', [], WSTD_THEME_VER );
} );

add_action( 'after_setup_theme', function() {
    /**
     * Theme supports
     */
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
} );

add_filter( 'document_title_separator', function( $sep ) {
    $sep = '|';
    return $sep;
} );

add_filter( 'document_title_parts', function( $title ) {
    if ( is_front_page() ) {
        unset( $title['tagline'] );
    }
    return $title;
} );
