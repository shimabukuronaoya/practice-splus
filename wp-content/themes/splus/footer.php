

    <section class="l-section breadArea">
        <nav class="l-content breadNav">
          <ul class="breadNavList">
            <li class="breadNavList__item"><a href="/">TOP</a></li>
          </ul>
        </nav>
    </section>

    <footer class="footer">
        <div class="pageTop"><a href="#" class="pageTop__link"><img src="https://www.splus-diving.com/wp-content/themes/splus/assets/img/common/img_page-top.svg" alt="pagetop" class="pageTop__img"></a></div>
        <h1 class="footer__logo"><a href="/" class="footer__logoLink"><img src="https://www.splus-diving.com/wp-content/themes/splus/assets/img/common/logo.png" alt="splus okinawa diving service" class="footer__logoImg"></a></h1>
        <div class="footerInfo">
          <div class="headerInfo__left">
            <a href="https://www.instagram.com/ito_yuichi78/" target="_blank" class="headerInfo__link insta">
              <img src="https://www.splus-diving.com/wp-content/themes/splus/assets/img/common/icon_insta.svg" alt="instagram" class="headerInfo__linkIcon">
            </a>
            <a href="https://www.facebook.com/profile.php?id=100011041908609" target="_blank" class="headerInfo__link fb">
              <img src="https://www.splus-diving.com/wp-content/themes/splus/assets/img/common/icon_fb.svg" alt="facebook" class="headerInfo__linkIcon">
            </a>
            <a href="tel:09097523301" class="headerInfo__link tel">
              <img src="https://www.splus-diving.com/wp-content/themes/splus/assets/img/common/icon_tel.svg" alt="tel" class="headerInfo__linkIcon"><span class="headerInfo__link-tel">090-9752-3301</span>
            </a>
          </div>
          <div class="headerInfo__right">
            <a href="#" class="headerInfo__btn contact">
                お問い合わせ
            </a>
            <a href="#" class="headerInfo__btn reserve">
                予約する
            </a>
          </div>
        </div>
        <div class="footer__copy"><small>Copyright © splus All Rights Reserved.</small></div>
        <div class="footer__bitknot"><a href="https://bitknot.co.jp/" target="_blank" class="footer__bitknotLink"><img src="https://www.splus-diving.com/wp-content/themes/splus/assets/img/common/logo_bitknot.svg" alt="powerd by BITKNOT ビットノット株式会社" class="footer__bitknotLogo"></a></div>
      </footer>

    <script>
        jQuery(function($){
            $(".slideAnimeList").slick({
                autoplay: true, // 自動でスクロール
                autoplay: true, // 自動でスクロール
    autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
    speed: 5000, // スライドが流れる速度を設定
    cssEase: "linear", // スライドの流れ方を等速に設定
    slidesToShow: 4, // 表示するスライドの数
    swipe: false, // 操作による切り替えはさせない
    arrows: false, // 矢印非表示
    pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
    pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
    rtl: true, // スライダーを左から右に流す（逆向き）
    
            });
        });
    </script>

<?php wp_footer(); ?>
</body>
</html>