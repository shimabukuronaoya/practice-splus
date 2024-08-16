<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>splus</title>
    <?php wp_head(); ?>


    <link rel="stylesheet" href="/assets/css/style.css">

    <script src="/assets/js/jquery-3.6.1.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/main.js"></script>
</head>
<body <?php body_class(); ?>>
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
                        <a href="/blog.php" class="headerNavList__link">
                            <span class="headerNavList__en">Blog</span>
                            <span class="headerNavList__ja">ブログ</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>