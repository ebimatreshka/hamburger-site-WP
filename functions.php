<?php
//テーマの設定
function custom_theme_support()
{
    //吐き出されるコードをデフォルトのHTMXからHTML5に変更
    add_theme_support("html5", array(
        "search-form",
        "comment-form",
        "comment-list", //隠れたコメントを表示
        "gallery",
        "caption", //galleryで使うキャプション
    ));
    //アイキャッチ画像の有効化
    add_theme_support("post-thumbnails");
    //テーマサポート(管理画面からタイトルタグ登録可能)
    add_theme_support("title-tag");
    //カスタムメニューの有効化(sidebar)
    add_theme_support('menus'); //menusとsをつけると複数登録できる
    register_nav_menus(array(
        "footer-menu" => "フッター",
        "sidebar-menu" => "サイドメニュー",
    ));
}
//実行
add_action("after_setup_theme", "custom_theme_support");

//タイトル出力
function hamburger_title($title)
{
    if (is_front_page() && is_home()) { //トップページなら
        $title = get_bloginfo("name", "display");
    } elseif (is_singular()) { //シングルページなら
        $title = single_post_title("", false);
    }
    return $title;
}
//出力させる
add_filter("pre_get_document_title", "hamburger_title");

// 宣言
function hamburger_script()
{
    //ress.css読み込み
    wp_enqueue_style("ress", "//unpkg.com/ress/dist/ress.min.css", array(), "");
    //M+PLUS+1p Roboto読み込み
    wp_enqueue_style("M+PLUS+1p", "https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap", array(), "");
    //Font Awesome読み込み
    wp_enqueue_style("font-awesome", "//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css", array(), "5.15.4");
    //cssフォルダの中のstyle.css読み込み(スタイリングを反映させるため)
    wp_enqueue_style("css", get_template_directory_uri() . "/css/style.css", array(), "");
    //style.css読み込み
    wp_enqueue_style("style-css", get_template_directory_uri() . "/style.css", array(), "");
    //jQuery読み込み
    wp_enqueue_script("jQuery", "https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js", "", "", true);


    //script読み込み
    wp_enqueue_script("script", get_template_directory_uri() . "/js/script.js", "jQuery", "", true);
    // wp_enqueue_style('script', get_theme_file_uri('/js/script.js'));
}


//実行
add_action("wp_enqueue_scripts", "hamburger_script");


//ウィジェット機能の有効化
function my_theme_widgets_init()
{
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');

//search.phpのcardの表示件数を設定
add_action('pre_get_posts', function ($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if (is_search()) {
        $query->set('posts_per_page', 5);
        return;
    }
});
