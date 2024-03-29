
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
    function register_my_menus()
    {
        register_nav_menus(
            array(
                'footer-menu' => __('フッター'),
                'sidebar-menu' => __('サイドメニュー')
            )
        );
    }
    add_action('init', 'register_my_menus');
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
    // wp_enqueue_script("font-awesome", "https://kit.fontawesome.com/8407ac2d80.js", array(), "5.15.4");
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

// dynamic_sidebar()関数を使用してサイドバーを表示
function theme_name_sidebar()
{
    if (is_active_sidebar('sidebar-1')) {
        dynamic_sidebar('sidebar-1');
    }
}

// search.phpのcardの表示件数を設定
add_action('pre_get_posts', function ($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if (is_search()) {
        $query->set('posts_per_page', 5);
        return;
    }
});

//archiveのcardの本文抜粋を取得する関数
function get_the_custom_excerpt($content, $length)
{
    $length = ($length ? $length : 107); //デフォルトの文字数
    $content =  strip_shortcodes($content); //ショートコード削除
    $content =  preg_replace('/.+/is', "", $content); //moreタグ以降削除
    $content =  strip_tags($content, "
"); //pタグ以外のタグの除去
    $content =  str_replace(" ", "", $content); //特殊文字の削除（今回はスペースのみ）
    $content =  mb_substr($content, 0, $length); //文字列を指定した長さで切り取る
    return $content;
}

//ショップ情報とヒストリーを検索結果から除外
function search_pre_get_posts($query)
{
    if ($query->is_search && !is_admin()) {
        $query->set('post__not_in', array(19, 79));
    }
    return $query;
}
add_action('pre_get_posts', 'search_pre_get_posts');

//抜粋の長さの変更
function custom_excerpt_length($length)
{
    return 55;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

//自動フィードリンクを有効にする テーマにRSSフィードがサポートされる
add_theme_support('automatic-feed-links');
