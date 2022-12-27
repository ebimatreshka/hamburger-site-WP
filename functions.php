<?php
//テーマサポート
add_theme_support( "title-tag" );
//タイトル出力
function hamburger_title( $title ) {
    if( is_front_page() && is_home()) {
        $title = get_bloginfo( "name","display" );
    }elseif( is_singular()) {
        $title =single_post_title( "",false );
    }
    return $title;
}
add_filter( "pre_get_document_title","hamburger_title");

// 宣言
function hamburger_script() {
    wp_enqueue_style( "google-font","//fonts.googleapis.com", array() );
    wp_enqueue_style( "M+PLUS+1p","//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap", array() );

    // <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    wp_enqueue_style( "ress","//unpkg.com/ress/dist/ress.min.css",array() );
    // <link rel="stylesheet" href="./css/style.css">
}
//実行
add_action( "wp_enqueue_scripts","hamburger_script" );