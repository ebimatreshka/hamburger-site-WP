<!-- header.phpを読み込むテンプレートタグ -->
<?php get_header(); ?>

<!--main visual-->
<main class="l-main__single p-main__single c-grid__main c-bg-color--egg">
    <!-- ループの開始 -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="p-main-visual__single c-background__single">
                <h1 class="p-main-visual__single--title c-font__R c-title__36 c-title__white"><?php the_title(); ?></h1>
            </div>

            <?php the_content(); ?>

</main>

<!-- ループの終わり -->
<?php endwhile;
    else : ?>
<p>表示する記事がありません</p>
<?php endif; ?>

<!--sidebar.phpを読み込むテンプレートタグ-->
<?php get_sidebar(); ?>

<!--footer.phpを読み込むテンプレートタグ -->
<?php get_footer(); ?>