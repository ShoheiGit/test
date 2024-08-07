$(function() {
    //スクロールするとsectionがフェード
    $(window).on('scroll', function() {
        const Height = $(window).height();
        const scroll = $(window).scrollTop();
        
        $(".scroll_fade").each(function() {
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
        // adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
        lazyLoad: 'progressive',
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

    $('.menus').slick({
        arrows: false,
        centerPadding: '60px',
        // infinite: true,
        // slidesToShow: 3,
        // responsive:[{
        //     breakpoint:768,
        //     centerMode: true,
        //     centerPadding: '60px',
        //     slidesToShow: 1,
        // }],

        slidesToShow: 3,
        lazyLoad: 'ondemand',
        responsive: [
        {
            breakpoint: 768, // 399px以下のサイズに適用
            settings: {
                slidesToShow: 1,
                centerMode: true,
            },
            centerPadding: '60px',
        },
        ],
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




    //うごくテキスト
    // top_textの中身の文字列がページをリロードすると、無限に消えたり出現したりするアニメーションを作るためのJavaScriptを追加します
    // 以下のコードを追加してください

    // ページがロードされたときに実行する処理
    $(document).ready(function() {
        var $topText = $(".top_text");

        // 無限にアニメーションを実行する関数
        function infiniteAnimation() {
            $topText.fadeOut(1000, function() {
                $topText.fadeIn(1000, function() {
                    setTimeout(function() {
                        infiniteAnimation(); // 再帰的に呼び出すことで無限ループ
                    }, 3000); // 2秒待つ
                });
            });
        }

        // ページロード時にアニメーションを開始
        infiniteAnimation();
    });
});