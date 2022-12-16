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
</head>

<body class="l-body">
    <div class="l-container c-grid">
        <div class="l-container__black"></div>

        <!--header-->
        <header class="l-header p-header c-grid__header c-bg-color--seashell c-flex-box--column c-bg-color--egg">
            <button class="p-header__title--menu c-font__R c-font-size__20 c-title__brown">Menu
                <a href="#"></a>
            </button>
            <h1 class="p-header__title c-font__R c-titl c-title__brown">Hamburger</h1>
            <form action="" class="p-search-form fa-search">
                <label for="" class="p-search-form__screen-reader-text">
                    <input type="text" class="p-search-form__keyword c-border c-round--63">
                </label>
                <label for="" class="p-search-form__screen-reader-text">
                <input type="button" class="p-search-form__submit c-border c-button--gradation c-round--63 c-font__M--bold" value="検索">
                </label>
            </form>
        </header>

        <!--main visual-->
        <main class="l-main__single p-main__single c-grid__main c-bg-color--egg">
            <div class="p-main-visual__single c-background__page">
                <h1 class="p-main-visual__single--title c-font__R c-title__36 c-title__white">ショップについて</h1>
            </div>

            <!--小見出しと引用-->     
            <section class="p-section__single">
                <h2 class="p-section__single--title-h2 c-font__M--bold c-font-size__28--single-h2 c-color__dark-brown c-LH15">見出しh2</h2>
                <p class="p-section__single--text c-font__M--regular c-font-size__16 c-color__dark-brown c-LH14375">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                <h3 class="p-section__single--title-h3 u-margin__T4 c-font__M--bold c-font-size__24--single-h3 c-color__dark-brown c-LH15">見出しh3</h3>
                <h4 class="p-section__single--title-h4 c-font__M--bold c-font-size__20--single-h4-6 c-color__dark-brown c-LH145">見出しh4</h4>
                <h5 class="p-section__single--title-h5 c-font__M--bold c-font-size__20--single-h4-6 c-color__dark-brown c-LH145">見出しh5</h5>                   
                <h6 class="p-section__single--title-h6 c-font__M--bold c-font-size__20--single-h4-6 c-color__dark-brown c-LH145">見出しh6</h6>
                <blockquote class="p-blockquote c-bg-color--light-gray c-font__M--regular c-font-size__16 c-color__dark-brown c-LH14375ß">
                    <p class="p-blockquote__text c-font__M--regular c-font-size__16 c-LH14375">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                    <p class="p-blockquote__text2 c-font__M--regular c-font-size__16 c-LH14375">出典元：　<cite><a class="p-blockquote__a c-color__blue" href="リンク先URL">◯◯◯◯◯◯◯◯◯◯◯◯</a></cite></p>
                </blockquote>
            </section>

            <!--横いっぱいのハンバーガー画像-->
            <img class="c-image__single--big u-margin__0" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">

            <!--ハンバーガーの画像と記事-->
            <section class="p-article1">
                <img class="p-article1__img c-image__single--middle" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
                <p class="p-article1__text c-font__M--regular c-font-size__16 c-LH14375"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
            </section>

            <!--記事とハンバーガーの画像-->
            <section class="p-article1 u-margin__B30">
                <p class="p-article2__text c-font__M--regular c-font-size__16 c-LH14375"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                <img class="p-article2__img c-image__single--middle" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
            </section>

            <!--中央揃えのハンバーガー画像-->
            <img class="c-image__single--middle2 u-margin__0" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">

            <!--タイル型ハンバーガー×9-->
            <section class="l-container__single c-grid__single">
                <img class="c-image__single--small" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
                <img class="c-image__single--small" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
                <img class="c-image__single--small" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
                <img class="c-image__single--small" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
                <img class="c-image__single--small" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
                <img class="c-image__single--small" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
                <img class="c-image__single--small" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
                <img class="c-image__single--small" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
                <img class="c-image__single--small" src="./images/cooked-foods-750073-2.png" alt="ハンバーガーとポテトの画像">
            </section>

            <!--リスト数字付き-->
            <section class="p-list__single c-font__M--regular c-font-size__16 c-LH14375">
                <ol class="u-margin__B20 u-padding__L16">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ol>
                <ol class="u-margin__B20 u-margin__L34 u-padding__L16">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ol>
                <ol class="u-padding__L16">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ol>
            </section>

            <!--リスト数字なし-->
            <section class="p-list__single c-font__M--regular c-font-size__16 c-LH14375">
                <ul class="u-margin__B20 ">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
                <ul class="u-margin__B20 u-margin__L34">
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
                <ul>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
            </section>

            <!--コード-->
            <section class="p-list__single-code c-bg-color--light-gray">
                <pre class="p-list__single-code-text">
                    <code>
                        
            &lt;html&gt;
                &lt;head&gt;
                &lt;/head&gt;
                &lt;body&gt;
                &lt;/body&gt;
            &lt;/html&gt;
                    </code>
                </pre>
            </section>

            <!--表-->
            <table class="p-table c-font__M--regular c-font-size__16 c-LH14375 c-color__brown c-border">
                <tr>
                    <td class="c-border__table p-table__td u-width__single-table-left">テーブル</td>
                    <td class="c-border__table p-table__td">テーブル</td>
                </tr>
                <tr>
                    <td class="c-border__table p-table__td u-width__single-table-left">テーブル</td>
                    <td class="c-border__table p-table__td">テーブル</td>
                </tr>
                <tr>
                    <td class="c-border__table p-table__td u-width__single-table-left">テーブル</td>
                    <td class="c-border__table p-table__td">テーブル</td>
                </tr>
                <tr>
                    <td class="c-border__table p-table__td u-width__single-table-left">テーブル</td>
                    <td class="c-border__table p-table__td">テーブル</td>
                </tr>
            </table>

            <!--ボタン-->
            <button class="p-section__single--button c-button--gradation c-font__M--bold c-font-size__16 c-color__dark-brown c-round--20 c-border">ボタン
                <a class="p-section__single--button-a" href="#"></a>
            </button>

            <p class="c-font__M--bold c-font-size__16 c-color__dark-brown u-margin__L20">boldboldboldboldboldboldbold</p>

            <!--ページネーション-->
            <!-- <ul class="p-pagination">
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold u-margin__R193">page 1/10</li> -->
                <!-- <li class="p-pagination__item-- u-margin__L203 c-pseudo-element">《</a></li> -->
                <!-- <li class="p-pagination__item c-font__M--regular"><a class="p-pagination__item--link c-pseudo-element__《 c-font-size__16" href="">《</a></li>
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold"><a class="p-pagination__item--link c-button__pagination c-bg-color--dark-brown c-color__white" href="">1</a></li>
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold"><a class="p-pagination__item--link  c-button__pagination" href="">2</a></li>
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold"><a class="p-pagination__item--link c-button__pagination" href="">3</a></li>
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold"><a class="p-pagination__item--link c-button__pagination" href="">4</a></li>
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold"><a class="p-pagination__item--link c-button__pagination" href="">5</a></li>
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold"><a class="p-pagination__item--link c-button__pagination" href="">6</a></li>
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold"><a class="p-pagination__item--link c-button__pagination" href="">7</a></li>
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold"><a class="p-pagination__item--link c-button__pagination" href="">8</a></li>
                <li class="p-pagination__item p-pagination__item--hide c-font__R--bold"><a class="p-pagination__item--link c-button__pagination" href="">9</a></li>
                <li class="p-pagination__item c-font__M--regular"><a class="p-pagination__item--link c-pseudo-element__》 c-font-size__16" href="">》</a></li> -->
                <!-- <li class="p-pagination__item">》</a></li> -->
            <!-- </ul> -->
            
        </main>

        <!--sidebar-->
        <article class="l-sidebar c-grid__sidebar">
            <nav class="p-nav">
                <p class="p-nav__hamburger-btn-wrapper">
                    <a class="p-nav__hamburger-btn-wrapper--btn c-text--brown" href=""></a>
                </p>
                <button class="p-nav__title--menu u-margin__title--menu c-text--brown c-font__R">Menu</button>
                <div>
                    <h3 class="p-nav__title u-margin__T130 c-font__M--bold c-font-size__24--sidebar-title">バーガー</h3>
                    <ul class="p-nav__ul c-font__M--regular LH--195 c-font-size__20">
                        <li class="p-nav__li">ハンバーガー</li>
                        <li class="p-nav__li">チーズバーガー</li>
                        <li class="p-nav__li">テリヤキバーガー</li>
                        <li class="p-nav__li">アボガドバーガー</li>
                        <li class="p-nav__li">フィッシュバーガー</li>
                        <li class="p-nav__li">ベーコンバーガー</li>
                        <li class="p-nav__li">チキンバーガー</li>
                    </ul>
                </div>
                <div>
                    <h3 class="p-nav__title u-margin__T11 c-font__M--bold c-font-size__24--sidebar-title">サイド</h3>
                    <ul class="p-nav__ul c-font__M--regular LH--195 c-font-size__20">
                        <li class="p-nav__li">ポテト</li>
                        <li class="p-nav__li">サラダ</li>
                        <li class="p-nav__li">ナゲット</li>
                        <li class="p-nav__li">コーン</li>
                    </ul>
                </div>
                <div>
                    <h3 class="p-nav__title u-margin__T18 c-font__M--bold c-font-size__24--sidebar-title">ドリンク</h3>
                    <ul class="p-nav__ul c-font__M--regular LH--195 c-font-size__20">
                        <li class="p-nav__li">コーラ</li>
                        <li class="p-nav__li">ファンタ</li>
                        <li class="p-nav__li">オレンジ</li>
                        <li class="p-nav__li">アップル</li>
                        <li class="p-nav__li">紅茶(Ice/Hot)</li>
                        <li class="p-nav__li">コーヒー(Ice/Hot)</li>
                    </ul>
                </div>
            </nav>
        </article>
        
        <!--footer-->
        <footer class="l-footer p-footer c-grid__footer c-background__footer">
            <ul class="p-footer__ul">
                <li class="p-footer__menu__li c-font__M--regular c-font-size__20"><a class="c-border__footer--li c-color__white" href="">ショップ情報</a></li>
                <li class="p-footer__menu__li c-font__M--regular c-font-size__20"><a class="c-border__footer--li c-color__white c-border__footer" href="">ヒストリー</a></li>
            </ul>
            <small class="p-footer__copyright c-font__M--regular c-font-size__14">Copyright: RaiseTech</small>
        </footer>
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="scss/js/script.js"></script>
</body>
</html>