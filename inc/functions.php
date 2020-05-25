<?php

/**
 * パンくずリスト
 *
 * @param string $pre
 * @param string $post
 * @return string
 */
function workstoretokyodo_breadcrumb( $pre = '<li>', $post = '</li>' ) {
    $html = '';
    $queried = get_queried_object();
    if ( is_null( $queried ) ) {
        return $html;
    }
    if ( is_page() ) {
        $html .= $pre . apply_filters( 'the_title', $queried->post_title ) . $post;
    }
    return $html;
}

/**
 * description 吐き出し用
 *
 * @return string
 */
function workstoretokyodo_meta_description() {
    $desc = '';
    if ( is_home() ) {
        $desc = get_bloginfo( 'description' );
    }
    return $desc;
}

/**
 * description 吐き出し用
 *
 * @return string
 */
function workstoretokyodo_meta_url() {
    $url = '';
    if ( is_home() ) {
        $url = get_home_url();
    }
    return $url;
}

/**
 * ogp とか image 吐き出し用
 *
 * @return string
 */
function workstoretokyodo_meta_image() {
    $img = WSTD_ASSETS_URI .'/common/img/ogp.jpg';
    return $img;
}
