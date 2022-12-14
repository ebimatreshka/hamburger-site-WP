//ハンバーガーメニュー(スライドインさせるために)
$(function () {
  $(".p-header__title--menu").click(function () {
    $(this).toggleClass("is-active");
    $(".l-container__black").toggleClass("is-active"); //黒幕にis-activeをつける(表示)
    $(".l-sidebar").toggleClass("is-open"); //sidebarにis-openをつける(表示)
    $(".l-body").toggleClass("is-active"); //コンテンツのスクロールバーを非表示に

  });

  $(".p-nav__hamburger-btn-wrapper").click(function () {
    $(".p-header__title--menu").removeClass("is-active"); //menuの非表示
    $(".l-sidebar").removeClass("is-open"); //sidebar非表示
    $(".l-container__black").removeClass("is-active"); //黒幕のis-activeをとる(表示)
    $(".l-body").removeClass("is-active"); //コンテンツのスクロールバーを表示
  })
})