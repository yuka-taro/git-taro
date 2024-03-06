jQuery("#js-drawer-icon").on("click",function (e){
  e.preventDefault();
  jQuery("#js-drawer-icon").toggleClass("is-checked");
  jQuery("#js-drawer-content").toggleClass("is-checked");
});

jQuery('.drawer-content__link').on('click',function() {
  jQuery("#js-drawer-icon").removeClass("is-checked");
  jQuery('#js-drawer-content').removeClass('is-checked');
} );

const swiper = new Swiper(".swiper", {
  loop: true,
  effect: "fade", // フェード切り替え
  // 自動再生
  autoplay: {
    delay: 4000, // 4秒後に次のスライドへ
    disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
  },
  speed: 2000, // 2秒かけてフェード
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

  jQuery(document).ready(function() {
    if ($(window).width() > 768) {
      jQuery(function(){
        var pagetop = $('.icon-position');
        pagetop.hide();
        $(window).scroll(function () {
           if ($(this).scrollTop() > 750) {
                pagetop.fadeIn();
           } else {
                pagetop.fadeOut();
           }
        });
      });
      jQuery("#js-drawer-icon-pc").on("click",function (e){
        e.preventDefault();
        jQuery("#js-drawer-icon-pc").toggleClass("is-checked");
        jQuery("#js-drawer-content").toggleClass("is-checked");
        jQuery("#js-overlay").toggleClass("is-checked");
      });
      jQuery("#js-overlay").on("click",function (e){
        e.preventDefault();
        jQuery("#js-drawer-icon-pc").removeClass("is-checked");
        jQuery("#js-drawer-content").removeClass("is-checked");
        jQuery("#js-overlay").removeClass("is-checked");
      });
    }
  });

  jQuery(function(){
    var pagetop = $('#page-top');
    pagetop.hide();
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
       }
    });
    pagetop.click(function () {
       jQuery('body, html').animate({ scrollTop: 0 }, 500);
       return false;
    });
  });


