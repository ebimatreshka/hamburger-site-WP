<!-- header.phpを読み込むテンプレートタグ -->
<?php get_header(); ?>

<!--main visual-->
<main class="l-main__archive p-main__archive c-grid__main c-bg-color--egg">
    <div class="p-main-visual__archive c-background__archive c-pseudo-element__black">
        <h1 class="p-main-visual__archive__title c-font__R c-title__36 c-title__white">Menu:</h1>
        <p class="p-main-visual__archive__detail c-font__M--bold c-font-size__16 c-color__white"><?php single_cat_title('', true); ?></p>
    </div>

    <!--小見出し-->
    <section class="p-section__archiveAbout">
        <article class="p-section__archiveAbout--article">
            <h2 class="p-section__archiveAbout--article__title c-font__M--bold c-font-size__28 c-color__dark-brown">小見出しが入ります</h2>
            <p class="p-section__archiveAbout--article__text c-font__M--regular c-font-size__16 c-color__dark-brown">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </article>
    </section>

    <!--card-->
    <!-- 投稿がある時 -->
    <?php if (have_posts()) : ?>
        <!-- ループ処理 投稿データがある限り-->
        <?php while (have_posts()) : the_post(); ?>
            <section class="p-section__card">
                <figure class="p-section__card__image">
                    <img class="p-section__card__image--blue" src="<?php echo get_template_directory_uri(); ?>/images/hamburger-card.jpg" alt="バーガー袋に入ったハンバーガーの写真">
                </figure>
                <div class="p-section__card__about--wrapper c-bg-color--dark-brown">
                    <h2 class="p-section__card__title c-font__M--bold c-font-size__20 c-color__white"><?php echo get_the_title(); ?></h2>
                    <h3 class="p-section__card__heading c-font__M--bold c-font-size__16 c-color__white">小見出しが入ります</h3>
                    <p class="p-section__card__text c-font__M--regular c-font-size__16 c-color__white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button onclick="location.href='<?php the_permalink(); ?>'" class="p-section__card__button c-button__white c-round--35 c-font__M--bold c-font-size__16 c-color__brown c-bg-color--white c-button--white c-LH--106"><a href="<?php the_permalink(); ?>"></a>詳しく見る</button>
                </div>
            </section>

            <!-- <section class="p-section__card">
                <figure class="p-section__card__image">
                    <img class="p-section__card__image--blue" src="// echo get_template_directory_uri(); ?>/images/hamburger-card.jpg" alt="バーガー袋に入ったハンバーガーの写真">
                </figure>
                <div class="p-section__card__about--wrapper c-bg-color--dark-brown">
                    <h2 class="p-section__card__title c-font__M--bold c-font-size__20 c-color__white">ダブルチーズバーガー</h2>
                    <h3 class="p-section__card__heading c-font__M--bold c-font-size__16 c-color__white">小見出しが入ります</h3>
                    <p class="p-section__card__text c-font__M--regular c-font-size__16 c-color__white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="p-section__card__button c-button__white c-round--35 c-font__M--bold c-font-size__16 c-color__brown c-bg-color--white c-button--white c-LH--106">詳しく見る</button>
                </div>
            </section>

            <section class="p-section__card">
                <figure class="p-section__card__image">
                    <img class="p-section__card__image--blue" src="// echo get_template_directory_uri(); ?>/images/hamburger-card.jpg" alt="バーガー袋に入ったハンバーガーの写真">
                </figure>
                <div class="p-section__card__about--wrapper c-bg-color--dark-brown">
                    <h2 class="p-section__card__title c-font__M--bold c-font-size__20 c-color__white">スペシャルチーズバーガー</h2>
                    <h3 class="p-section__card__heading c-font__M--bold c-font-size__16 c-color__white">小見出しが入ります</h3>
                    <p class="p-section__card__text c-font__M--regular c-font-size__16 c-color__white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="p-section__card__button c-button__white c-round--35 c-font__M--bold c-font-size__16 c-color__brown c-bg-color--white c-button--white c-LH--106">詳しく見る</button>
                </div>
            </section> -->
        <?php
        endwhile;
    else :
        ?>
        <p>お探しのページはありません</p>
    <?php endif; ?>


    <!--ページネーション-->
    <div class="wp-pagination__wapper">
        <ul class="p-pagination">
            <li class="p-pagination__item p-pagination__item--hide c-font__R--bold u-margin__R193">page 1/10</li>
            <!-- <li class="p-pagination__item-- u-margin__L203 c-pseudo-element">《</a></li> -->
            <!-- 拡張機能で表示させる -->
            <?php wp_pagenavi(); ?>
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
        </ul>
    </div>
</main>


<!--sidebar.phpを読み込むテンプレートタグ-->
<?php get_sidebar(); ?>

<!--footer.phpを読み込むテンプレートタグ -->
<?php get_footer(); ?>