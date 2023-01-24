        <!--footer-->
        <footer class="l-footer p-footer c-grid__footer c-background__footer">
            <ul class="p-footer__ul">
                <?php
                wp_nav_menu(
                    array(
                        "theme_location" => "footermenu",
                        'after' => '|',
                    )
                );
                ?>
                <!-- <li class="p-footer__menu__li c-font__M--regular c-font-size__20">ショップ情報　|</li>
                <li class="p-footer__menu__li c-font__M--regular c-font-size__20">　ヒストリー</li> -->
            </ul>
            <small class="p-footer__copyright c-font__M--regular c-font-size__14">Copyright: RaiseTech</small>
        </footer>
        </div>


        <!-- WPのテーマに含める関数(必須のテンプレートタグ) -->
        <?php wp_footer(); ?>

        </body>

        </html>