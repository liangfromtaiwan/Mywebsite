// ページトップボタン
$(function () {
  const pageTop = $(".cta-fixed");
  pageTop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
  });
});
// フッター手前でストップ
$(document).ready(function () {
  $(".cta-fixed").hide();
  $(window).on("scroll", function () {
    scrollHeight = $(document).height();
    scrollPosition = $(window).height() + $(window).scrollTop();
    contantHeight = $(".footContent").innerHeight();
    footHeight = contantHeight;
    if (scrollHeight - scrollPosition <= footHeight) {
      $(".cta-fixed").css({
        position: "absolute",
        bottom: footHeight,
      });
    } else {
      $(".cta-fixed").css({
        position: "fixed",
        bottom: "0",
      });
    }
  });
});
// スムーズスクロール
$(function(){
  $('a[href^="#"]').click(function(){
    var adjust = 0;
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top + adjust;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});