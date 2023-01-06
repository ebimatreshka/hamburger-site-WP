        <!--sidebar-->
        <article class="l-sidebar c-grid__sidebar">
            <p class="p-nav__hamburger-btn-wrapper">
                <a class="p-nav__hamburger-btn-wrapper--btn c-text--brown" href=""></a>
            </p>
            <button class="p-nav__title--menu u-margin__title--menu c-text--brown c-font__R">Menu</button>
            <nav class="p-nav">
                <!-- <div>
                    <h3 class="p-nav__title u-margin__T130 c-font__M--bold">バーガー</h3>
                    <ul class="p-nav__ul c-font__M--regular LH--195">
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
                    <h3 class="p-nav__title u-margin__T11 c-font__M--bold">サイド</h3>
                    <ul class="p-nav__ul c-font__M--regular LH--195">
                        <li class="p-nav__li">ポテト</li>
                        <li class="p-nav__li">サラダ</li>
                        <li class="p-nav__li">ナゲット</li>
                        <li class="p-nav__li">コーン</li>
                    </ul>
                </div>
                <div>
                    <h3 class="p-nav__title u-margin__T18 c-font__M--bold">ドリンク</h3>
                    <ul class="p-nav__ul c-font__M--regular LH--195">
                        <li class="p-nav__li">コーラ</li>
                        <li class="p-nav__li">ファンタ</li>
                        <li class="p-nav__li">オレンジ</li>
                        <li class="p-nav__li">アップル</li>
                        <li class="p-nav__li">紅茶(Ice/Hot)</li>
                        <li class="p-nav__li">コーヒー(Ice/Hot)</li>
                    </ul>
                </div> -->
                <!-- ナビゲーションメニュー読み込み -->
                <!-- 管理画面の外観のメニューを表示 -->
                <!-- サイドメニューの定義 -->
                <?php
    wp_nav_menu( 
        array(
            "theme_location" => "sidebar-menu",
            // "menu_class"      => "menu",
            )
        );
        ?>
        </nav>
        </article>

