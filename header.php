<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="サイトの説明文が入ります">
    <title>Hamburger</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <?php wp_head(); ?>
</head>

<body class="l-body">
    <div class="l-container c-grid">
        <div class="l-container__black"></div>


        <!--header-->
        <header class="l-header p-header c-grid__header c-bg-color--seashell c-flex-box--column">
            <button class="p-header__title--menu c-font__R c-font-size__20 c-title__brown">Menu
                <a href="#"></a>
            </button>
            <h1 class="p-header__title c-font__R c-title__brown">Hamburger</h1>
            <form action="" class="p-search-form fa-search">
                <label for="" class="p-search-form__screen-reader-text">
                    <input type="text" class="p-search-form__keyword c-border c-round--63">
                </label>
                <label for="" class="p-search-form__screen-reader-text">
                <input type="button" class="p-search-form__submit c-border c-button--gradation c-round--63 c-font__M--bold" value="検索">
                </label>
            </form>
        </header>
