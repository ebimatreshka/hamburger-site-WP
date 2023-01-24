//ハンバーガーメニュー(スライドインさせるために)
jsjQuery(function () {
  $(".p-header__title--menu").click(function () {
    $(this).addClass("is-active");
    $(".l-container__black").addClass("is-active"); //黒幕にis-activeをつける(表示)
    $(".l-sidebar").addClass("is-open"); //sidebarにis-openをつける(表示)
    $(".l-body").addClass("is-active"); //コンテンツのスクロールバーを非表示に
    console.log("8cho");
  });
});

// 修正用(✖️に効かせる用)
jQuery(function () {
  $(".p-nav__hamburger-btn-wrapper").click(function () {
    console.log("16cho");
    $(".p-header__title--menu").removeClass("is-active"); //menuの非表示
    $(".l-sidebar").removeClass("is-open"); //sidebar非表示
    $(".l-container__black").removeClass("is-active"); //黒幕のis-activeをとる(表示)
    $(".l-body").removeClass("is-active"); //コンテンツのスクロールバーを表示
  });
});

// jQuery(function () {
//   $(".p-header__title--menu").click(function () {
//     $(this).toggleClass("is-active");
//     $(".l-container__black").toggleClass("is-active"); //黒幕にis-activeをつける(表示)
//     $(".l-sidebar").toggleClass("is-open"); //sidebarにis-openをつける(表示)
//     $(".l-body").toggleClass("is-active"); //コンテンツのスクロールバーを非表示に
//     console.log("8cho");
//   });

// $(".p-header__title--menu").click(function () {
//   $(".p-header__title--menu").removeClass("is-active"); //menuの非表示
//   $(".l-sidebar").removeClass("is-open"); //sidebar非表示
//   $(".l-container__black").removeClass("is-active"); //黒幕のis-activeをとる(表示)
//   $(".l-body").removeClass("is-active"); //コンテンツのスクロールバーを表示
//   console.log("16cho");
// });
