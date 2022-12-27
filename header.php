<!DOCTYPE html>
<!-- 言語設定を自動的に出力 -->
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="サイトの説明文が入ります">

    <title>Hamburger</title>

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <!-- WPのテーマに含める関数 -->
    <?php wp_head(); ?>

</head>

<!--異なるclassを付与し(任意のclassを追加も可能)-->
<body <?php body_class( "l-body" ); ?>>
    <div class="l-container c-grid">
        <div class="l-container__black"></div>


        <!--header-->
        <header class="l-header p-header c-grid__header c-bg-color--seashell c-flex-box--column">
            <button class="p-header__title--menu c-font__R c-font-size__20 c-title__brown">Menu
                <a href="#"></a>
            </button>

            <h1 class="p-header__title c-font__R c-title__brown">
                <!-- ブログのホームURIを取得&サイトのタイトルを取得して表示  -->
                <a href="<?php echo esc_url(home_url( "/" )); ?>"><?php bloginfo( "name" ); ?></a></h1>

                <!-- searchform.phpを呼び出すテンプレートタグ -->
                <?php get_search_form(); ?>
        </header>
