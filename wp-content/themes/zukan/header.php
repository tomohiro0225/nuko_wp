<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ほしてつの鉄道写真館-鉄道図鑑TOP-</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/zukan.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/zukanTop.css">
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&family=RocknRoll+One&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <!-- ローダー -->
    <div class="loading">
        <div class="kvArea loading__wrap">
          <div class="loading__inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/others/loading.png" alt="" class="loading__img"></div>
        </div>
    </div>
    
    <!-- ヘッダー -->
    <header class="l-header">
        <div class="l-header__wrap">
            <div class="l-header__name">
                <h1 class="site-name">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/others/SiteTitle_en.jpg" alt="">
                </h1>
            </div>
            <nav class="l-header__nav">
                <ul class="l-header__menuList">
                    <li class="l-header__menuLink"><a href="#">SiteTOPに上がる</a></li>
                    <li class="l-header__menuLink "><a href="http://hoshitetsu-photo.com/">ほしてつの鉄道図鑑TOP</a></li>
                    <li class="l-header__menuWrap">
                        <p class="l-header__menuOuter" data-accordion="menuOuter"><a href="<?php echo get_template_directory_uri(); ?>/index/php">鉄道図鑑</a></p>
                        <div class="l-header__menuInner" data-accordion="menuInner">
                            <p class="l-header__menuLink bgblue">
                                <a href="./zukan_company.html?company_en=JR-West">JR西日本</a>
                            </p>
                            <p class="l-header__menuLink bgblue">
                                <a href="./zukan_company.html?company_en=hanshin">阪神電気鉄道</a>
                            </p>
                            <p class="l-header__menuLink bgblue">
                                <a href="./zukan_company.html?company_en=sanyo">山陽電気鉄道</a>
                            </p>
                            <p class="l-header__menuLink bgblue">
                                <a href="./zukan_company.html?company_en=Hokuetsu-Express">北越急行</a>
                            </p>
                          </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="l-header__menuTrigger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>