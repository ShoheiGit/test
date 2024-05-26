$(function() {
    //スクロールするとsectionがフェード
    $(window).scroll (function() {
        const Height = $(window).height();
        const scroll = $(window).scrollTop();
        
        console.log(scroll);

        $("section").each(function() {
            const position = $(this).offset().top;
            
            if(scroll > position - Height + 200){
                $(this).addClass("fadeIn");
            }
        });
    });

    //スライダー
    $('.slider').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });


    function updateMenuClass() {
        const $menuElement = $('.menus');
        const screenWidth = $(window).width();
  
        if (screenWidth <= 768) {
          // スマートフォンの場合
          if (!$menuElement.hasClass('menus_sp')) {
            $menuElement.addClass('menus_sp');
          }
        } else {
          // PCの場合
          $menuElement.removeClass('menus_sp');
        }
      }
  
      // 初回ロード時の判定
      updateMenuClass();
  
      // リサイズ時の判定
      $(window).on('resize', updateMenuClass);

    $('.menus_sp').slick({
        responsive:[{
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 1,
        }],
    });

    //LINE登録モーダル
    // 変数に要素を入れる
    var open = $('.modal-open'),
        close = $('.modal-close'),
        container = $('.modal-container');
    
    //開くボタンをクリックしたらモーダルを表示する
    open.on('click',function(){ 
        container.addClass('active');
        return false;
    });
    
    //閉じるボタンをクリックしたらモーダルを閉じる
    close.on('click',function(){  
        container.removeClass('active');
    });
    
    //モーダルの外側をクリックしたらモーダルを閉じる
    $(document).on('click',function(e) {
        if(!$(e.target).closest('.modal-body').length) {
        container.removeClass('active');
        }
    });



    //ナビゲーションメニューのモーダル表示
    $('.nav_button').on('click', function(){
        $(this).next('.nav_modal').slideToggle();
        $(this).toggleClass('active');
 
        if ($(this).hasClass('active')) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }

        $('.modal_bg').toggle('active');
    });
});