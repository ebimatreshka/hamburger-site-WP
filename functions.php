<?php
//テーマサポート(タイトルタグのサポートを許可)
add_theme_support( "title-tag" );
//メニュー(sidebar)
add_theme_support( 'menus' );
//アイキャッチ画像
add_theme_support( "post-thumbnails" );

//タイトル出力
function hamburger_title( $title ) {
    if( is_front_page() && is_home()) { //トップページなら
        $title = get_bloginfo( "name","display" );
    }elseif( is_singular()) { //シングルページなら
        $title =single_post_title( "",false );
    }
    return $title;
}
//出力させる
add_filter( "pre_get_document_title","hamburger_title");

// 宣言
function hamburger_script() {
    //Google Fonts読み込み
    // wp_enqueue_style( "google-font","https://fonts.googleapis.com", array() );
    //M+PLUS+1p Roboto読み込み
    wp_enqueue_style( "M+PLUS+1p","https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap", array() );
    //Font Awesome読み込み
    wp_enqueue_style( "font-awesome","//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css",array(),"5.15.4" );
    //ress.css読み込み
    wp_enqueue_style( "ress","//unpkg.com/ress/dist/ress.min.css",array() );
    //cssフォルダの中のstyle.css読み込み
    wp_enqueue_style( "css",get_template_directory_uri()."/css/style.css",array() ); 
    //style.css読み込み
    wp_enqueue_style( "style-css",get_template_directory_uri()."/style.css",array() );

    //jQuery読み込み
    // wp_enqueue_script( "jQuery","https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js");
    //script読み込み
    // wp_enqueue_script( "script",get_template_directory_uri()."/js/script.js",array( "jQuery" ), false );
}
//動かないのでheader.phpに読み込ませた
// //jQuery読み込み
// function custom_print_scripts() {
// 	if (!is_admin()) {
// 		//デフォルトjquery削除
// 		wp_deregister_script('jquery');

// 		//GoogleCDNから読み込む
// 		wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
// 	}
// }
// add_action('wp_print_scripts', 'custom_print_scripts');


//実行
add_action( "wp_enqueue_scripts","hamburger_script" );

//faviconの読み込み
function setup_favicon() {
	echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon.ico">' . "\n";
}
//実行
add_action('wp_head', 'setup_favicon');
add_action('login_head', 'setup_favicon');
add_action('admin_head', 'setup_favicon');