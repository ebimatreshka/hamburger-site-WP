<!-- getはリクエストするファイルの追加情報がURLパラメータとして付与 -->
<form class="p-search-form fa-search" method="get" action="<?php echo esc_url(home_url("/")); ?>">
    <label for="" class="p-search-form__screen-reader-text">
        <!-- WPの検索はsというパラメーターで渡されるので"s"を指定 -->
        <input type="text" class="p-search-form__keyword c-border c-round--63" name="s" id="s" value="<?php the_search_query(); ?>">
    </label>
    <label for="" class="p-search-form__screen-reader-text">
        <input type="submit" class="p-search-form__submit c-border c-button--gradation c-round--63 c-font__M--bold" value="検索">
    </label>
</form>