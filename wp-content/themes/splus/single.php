<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>splus</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</head>

<body>
    <header id="header" class="header l-section --wide">
        <div class="l-content">
            <h1 class="headerLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="splus" class="headerLogo__img">
            </h1>
            <div class="headerInfo">
                <div class="headerInfo__left">
                    <a href="#" class="headerInfo__link insta"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_instagram.svg" alt="" class="headerInfo__linkIcon"></a>
                    <a href="#" class="headerInfo__link faceBook"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_facebook.svg" alt="" class="headerInfo__linkIcon"></a>
                    <a href="#" class="headerInfo__link tel"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_tel.svg" alt="" class="headerInfo__linkIcon">
                        <span class="headerInfo__linkTel">090-9752-3301</span></a>
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
            <nav class="headerNav">
                <ul class="headerNavList --left">
                    <li class="headerNavList__item">
                        <a href="#" class="headerNavList__link">
                            <span class="headerNavList__en">C-Card</span>
                            <span class="headerNavList__ja">ライセンス講習</span>
                        </a>
                    </li>
                    <li class="headerNavList__item">
                        <a href="#" class="headerNavList__link">
                            <span class="headerNavList__en">Fun Diving</span>
                            <span class="headerNavList__ja">ファンダイビング</span>
                        </a>
                    </li>
                    <li class="headerNavList__item">
                        <a href="#" class="headerNavList__link">
                            <span class="headerNavList__en">Experience Dive</span>
                            <span class="headerNavList__ja">体験ダイビング</span>
                        </a>
                    </li>
                </ul>
                <ul class="headerNavList --right">
                    <li class="headerNavList__item">
                        <a href="#" class="headerNavList__link">
                            <span class="headerNavList__en">Point Map</span>
                            <span class="headerNavList__ja">ポイントマップ</span>
                        </a>
                    </li>
                    <li class="headerNavList__item">
                        <a href="#" class="headerNavList__link">
                            <span class="headerNavList__en">Staff</span>
                            <span class="headerNavList__ja">スタッフ紹介</span>
                        </a>
                    </li>
                    <li class="headerNavList__item">
                        <a href="#" class="headerNavList__link">
                            <span class="headerNavList__en">Blog</span>
                            <span class="headerNavList__ja">ブログ</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="lowerKvArea blogKvArea l-section">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv.jpg" alt="" class="topKvImg">
        <div class="l-content">
            <div class="topKvTxtBox">
                <p class="pageTtl__en">Blog</p>
                <h2 class="pageTtl__ja">ブログ</h2>
            </div>
        </div>
    </div>

    <p>シングルページ</p>

    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'paged' => $paged
    );
    $the_query = new WP_Query($args);
    ?>

    <section class="l-section blogArea">
        <div class="l-content">
            <ul class="blogList">
                <?php
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();

                        $cat = get_the_category();
                        $cat_name = $cat[0]->name;
                ?>

                        <li class="blogList__item">
                            <a href="<?php the_permalink(); ?>" class="blogList__link">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('thumb-blog-list'); ?>
                                <?php else : ?>
                                    <div class="blogList__imgBox">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                                    </div>
                                <?php endif; ?>
                                <p class="blogList__category"><?php echo $cat_name ?></p>
                                <div class="blogList__txtBox">
                                    <h2 class="blogList__ttl"><?php the_title(); ?><span class="blogList__date"><?php echo get_the_date(); ?></span></h2>
                                </div>
                            </a>
                        </li>
                    <?php endwhile;
                else: ?>
                    <p style="text-align: center; width: 100%;">ブログはまだありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>


                <!-- <li class="blogList__item">
                    <a href="#" class="blogList__link">
                        <div class="blogList__imgBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                        </div>
                        <p class="blogList__category">アドヴァンスド</p>
                        <div class="blogList__txtBox">
                            <h2 class="blogList__ttl">慶良間諸島でライセンス講習<span class="blogList__date">2024.07.15</span></h2>
                        </div>
                    </a>
                </li>
                <li class="blogList__item">
                    <a href="#" class="blogList__link">
                        <div class="blogList__imgBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                        </div>
                        <p class="blogList__category">アドヴァンスド</p>
                        <div class="blogList__txtBox">
                            <h2 class="blogList__ttl">慶良間諸島でライセンス講習<span class="blogList__date">2024.07.15</span></h2>
                        </div>
                    </a>
                </li>
                <li class="blogList__item">
                    <a href="#" class="blogList__link">
                        <div class="blogList__imgBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                        </div>
                        <p class="blogList__category">アドヴァンスド</p>
                        <div class="blogList__txtBox">
                            <h2 class="blogList__ttl">慶良間諸島でライセンス講習<span class="blogList__date">2024.07.15</span></h2>
                        </div>
                    </a>
                </li>
                <li class="blogList__item">
                    <a href="#" class="blogList__link">
                        <div class="blogList__imgBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                        </div>
                        <p class="blogList__category">アドヴァンスド</p>
                        <div class="blogList__txtBox">
                            <h2 class="blogList__ttl">慶良間諸島でライセンス講習<span class="blogList__date">2024.07.15</span></h2>
                        </div>
                    </a>
                </li>
                <li class="blogList__item">
                    <a href="#" class="blogList__link">
                        <div class="blogList__imgBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                        </div>
                        <p class="blogList__category">アドヴァンスド</p>
                        <div class="blogList__txtBox">
                            <h2 class="blogList__ttl">慶良間諸島でライセンス講習<span class="blogList__date">2024.07.15</span></h2>
                        </div>
                    </a>
                </li>
                <li class="blogList__item">
                    <a href="#" class="blogList__link">
                        <div class="blogList__imgBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                        </div>
                        <p class="blogList__category">アドヴァンスド</p>
                        <div class="blogList__txtBox">
                            <h2 class="blogList__ttl">慶良間諸島でライセンス講習<span class="blogList__date">2024.07.15</span></h2>
                        </div>
                    </a>
                </li>
                <li class="blogList__item">
                    <a href="#" class="blogList__link">
                        <div class="blogList__imgBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                        </div>
                        <p class="blogList__category">アドヴァンスド</p>
                        <div class="blogList__txtBox">
                            <h2 class="blogList__ttl">慶良間諸島でライセンス講習<span class="blogList__date">2024.07.15</span></h2>
                        </div>
                    </a>
                </li>
                <li class="blogList__item">
                    <a href="#" class="blogList__link">
                        <div class="blogList__imgBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                        </div>
                        <p class="blogList__category">アドヴァンスド</p>
                        <div class="blogList__txtBox">
                            <h2 class="blogList__ttl">慶良間諸島でライセンス講習<span class="blogList__date">2024.07.15</span></h2>
                        </div>
                    </a>
                </li> -->
            </ul>
                <div class="blogPagination">
                    <?php
                    $big = 999999999;
                    $paginate_links = paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?page=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $the_query->max_num_pages,
                        'type' => 'list',
                        'prev_text' => '',
                        'next_text' => '',
                        'mid_size'  => 1
                    ));
                    echo $paginate_links;
                    ?>
                    <!-- <ul class="page-number">
                    <li><a class="prev page-numbers disabled"></a></li>
                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="#">2</a></li>
                    <li><span class="page-numbers dots">…</span></li>
                    <li><a class="page-numbers" href="#">22</a></li>
                    <li><a class="next page-numbers" href="#"></a></li>
                </ul> -->
                </div>
                <script>
      jQuery(function($) {
        if (!$('.pagination').find('.prev').length) {
          $('ul.page-number').prepend('<li><a class="prev page-numbers disabled"></a></li>');
        }
        if (!$('.pagination').find('.next').length) {
          $('ul.page-number').append('<li><a class="next page-numbers disabled"></a></li>');
        }
      });
      </script>
        </div>
    </section>


    <section class="l-section breadArea">
        <nav class="l-content breadNav">
            <ul class="breadNavList">
                <li class="breadNavList__item"><a href="/">TOP</a></li>
                <li class="breadNavList__item"><a href="/">ブログ</a></li>
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
        jQuery(function($) {
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

</body>

</html>