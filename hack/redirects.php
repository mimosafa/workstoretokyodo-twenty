<?php

add_action( 'template_redirect', function() {
    if ( ! is_404() ) {
        return;
    }
    $req = array_filter( explode( '/', $_SERVER['REQUEST_URI'] ) );
    $r1 = array_shift( $req );
    if ( $r1 === 'neostall' ) {
        _workstoretokyodo_neostall_redirect( $req );
    } else if ( $r1 === 'neoponte' ) {
        _workstoretokyodo_neoponte_redirect( $req );
    } else {
        _workstoretokyodo_custom_redirect( $r1, $req );
    }
} );

/**
 * ネオ屋台村用リダイレクト
 */
function _workstoretokyodo_neostall_redirect( $req ) {
    $r1 = array_shift( $req );
    if ( $r1 === 'space' ) {
        _workstoretokyodo_neostall_space_redirect( $req );
    }
}

function _workstoretokyodo_neostall_space_redirect( $req ) {
    if ( empty( $req ) ) {
        return;
    }
    $space = array_shift( $req );
    $map = [
        'metrosquare' => '大手町サンケイビル村',
        't-i-forum' => '有楽町東京国際フォーラム村',
        'platform-square' => 'ちよだプラット村',
        'nomurakougei' => 'お台場の村',
        '31mt' => 'MFPR麹町ビルネオ屋台村',
        'ns-bldg' => '新川NSビル村',
        'rcast' => '駒場東大RCAST村',
        'ims-u-tokyo' => '東大医科研村',
        'kdx-ochanomizu' => 'KDX御茶ノ水ビル村',
        'mita-tokuei' => '三田徳栄ビル村',
        'j6front' => '神宮前J6Frontビル村',
        'u-tokyo-hongo-1' => '東大本郷キャンパス村',
        'u-tokyo-hongo-2' => '東大本郷キャンパス村',
        'u-tokyo-hongo-3' => '東大本郷キャンパス村',
        'u-tokyo-hongo-4' => '東大本郷キャンパス村',
        'u-tokyo-hongo-5' => '東大本郷キャンパス村',
        'fsi-akibaplaza' => '富士ソフトアキバ屋台村',
        'urban-terrace' => '丸の内仲通りUrbanTerrace',
        'shibuya-cast-garden' => 'SHIBUYA%20CAST.%20GARDEN',
        'sola-gohan' => 'ネオ屋台村%20ソラごはん%20＠御茶ノ水ソラシティ',
        'avex' => 'エイベックスビル前広場%20ネオ屋台村',
        'sinnotyanomizubirudexinngu' => '新お茶の水ビルディングランチ',
        'keio-yagami' => '慶應義塾大学矢上キャンパス村',
        'iictokyo' => 'イタリア文化会館',
        'azabu-green-terrace' => 'Daiwa麻布テラス村',
        'kokuritutennmonndai' => '国立天文台三鷹キャンパスランチ',
        'saitama-med-hidaka' => '埼玉医科大学%20日高キャンパス村',
        'saitama-med-moroyama' => '埼玉医科大学毛呂山キャンパス村',
    ];
    $path = '//www.w-tokyodo.com/neostall/space/lunch/?lunch=';
    if ( $match = $map[$space] ?? '' ) {
        wp_redirect( $path . $match, '301' );
        exit;
    }
}

/**
 * ネオポンテ用リダイレクト
 */
function _workstoretokyodo_neoponte_redirect( $req ) {
    wp_redirect( 'http://chibaramen.info', '307' );
    exit;
}

/**
 * カスタムリダイレクト
 */
function _workstoretokyodo_custom_redirect( $var, Array $request ) {
    if ( $var === 'u-tokyo-hongo' ) {
        /**
         * ネオ屋台村 - ランチ - 東大本郷キャンパス村
         * https://w-tokyodo.com/u-tokyo-hongo/
         */
        wp_redirect( '//www.w-tokyodo.com/neostall/space/lunch/?lunch=東大本郷キャンパス村' );
        exit;
    }
}
