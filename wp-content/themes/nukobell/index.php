<?php get_header(); ?>
    <main class="main">
        <div class="mainVisual js-mainVisual">
            <div class="mainVisual__bgImg">
                <div class="mainVisual__inner inner">
                    <div class="mainVisual__wrap">
                        <h1 class="mainVisual__title">猫と暮らそう</h1>
                        <p class="mainVisual__text">安心・安全な猫専門ペットショップ</p>
                        <div class="mainVisual__btnArea">
                            <a href="#" class="mainVisual__btn">猫種一覧を見る</a>
                            <a href="#" class="mainVisual__btn">お店を見る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.mainVisual -->

        <?php 
            $args = array(
                'post_type' => 'news',//ポストタイプのスラッグ
                'order' => 'DESC',//並び順、DESCは最新ジュン
                'post_per_page' => 4//何件表示するか？
            );
            $my_query = new WP_Query($args);//$my_queryに$argsを入れている
            if($my_query->have_posts()) :
        ?>
                
        <div class="news">
            <div class="news__inner inner">
                <div class="news__wrap">
                    <div class="news__heading">お知らせ</div>
                    <ul class="news__list">
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="news__item">
                            <div class="news__date"><?php echo get_field('news_date'); ?></div>
                            <div class="news__title">
                                <?php if (get_field('news_link')) : ?>
                                <a href="<?php echo get_field('news_link'); ?>" class="news__link"><?php echo the_title(); ?></a>
                                <?php else: ?>
                                <?php echo the_title(); ?>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>

        <?php endif; ?>
        <!-- /.news -->
        <section class="findPets">
            <div class="findPet__inner inner">
                <div class="findPet__head">
                    <h2 class="util__title">ペットを探す</h2>
                    <p class="util__subTitle">Find a pet</p>
                </div>
                <div class="findPet__wrap">
                    <ul class="findPet__list">
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/01.png" alt="スコティッシュフォールド">
                                </div>
                                <p class="findPet__catName">スコティッシュ<br>フォールド</p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/02.png" alt="アメリカンショートヘア">
                                </div>
                                <p class="findPet__catName">アメリカン<br>ショートヘア</p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/03.png" alt="メインクイーン">
                                </div>
                                <p class="findPet__catName">メインクイーン</p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/04.png" alt="エキゾチックショートヘア">
                                </div>
                                <p class="findPet__catName">エキゾチック<br>ショートヘア</p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/05.png" alt="ラグドール">
                                </div>
                                <p class="findPet__catName">ラグドール</p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/06.png" alt="ブリティッシュショートヘア">
                                </div>
                                <p class="findPet__catName">ブリティッシュ<br>ショートヘア</p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/07.png" alt="マンチカン">
                                </div>
                                <p class="findPet__catName">マンチカン</p>
                            </a>
                        </li>
                        <li class="findPet__item">
                            <a href="#" class="findPet__link">
                                <div class="findPet__catImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/08.png" alt="サイベリアン">
                                </div>
                                <p class="findPet__catName">サイベリアン</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="findPet__more">
                    <a href="" class="util__link">猫種一覧を見る</a>
                </div>
            </div>
        </section>
        <!-- /.findPet -->
        <section class="findStore">
            <div class="findStore__inner inner">
                <div class="findStore__head">
                    <h2 class="util__title">お店を探す</h2>
                    <p class="util__subTitle">Find a store</p>
                </div>
                <div class="findStore__wrap">
                    <div class="findStore__map">
                        <div class="findStore__area findStore__area--hokkaido"></div>
                        <div class="findStore__area findStore__area--kyushu"></div>
                        <div class="findStore__area findStore__area--shikoku"></div>
                        <div class="findStore__area findStore__area--honshu1"></div>
                        <div class="findStore__area findStore__area--honshu2"></div>
                    </div>
                    <div class="findStore__shop">
                        <a href="#" class="findStore__link"><div class="findStore__name findStore__name--sapporo">札幌店</div></a>
                        <a href="#" class="findStore__link"><div class="findStore__name findStore__name--miyagi">宮城店</div></a>
                        <a href="#" class="findStore__link"><div class="findStore__name findStore__name--shinjuku">新宿店</div></a>
                        <a href="#" class="findStore__link"><div class="findStore__name findStore__name--ishikawa">石川店</div></a>
                        <a href="#" class="findStore__link"><div class="findStore__name findStore__name--umeda">梅田店</div></a>
                        <a href="#" class="findStore__link"><div class="findStore__name findStore__name--shizuoka">静岡店</div></a>
                        <a href="#" class="findStore__link"><div class="findStore__name findStore__name--fukuoka">福岡店</div></a>
                        <a href="#" class="findStore__link"><div class="findStore__name findStore__name--kagoshima">鹿児島店</div></a>
                    </div>
                </div>
                <div class="findStore__more">
                    <a href="" class="util__link">店舗一覧を見る</a>
                </div>
            </div>
        </section>
        <!-- /.store -->
        <section class="blog">
            <div class="blog__inner inner">
                <div class="blog__head">
                    <h2 class="util__title">ブログ</h2>
                    <p class="util__subTitle">Blog</p>
                </div>
                <div class="blog__wrap">
                    <ul class="blog__list">
                        <li class="blog__item">
                            <a href="#" class="blog__link">
                                <div class="blog__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/00.jpg" alt="">
                                </div>
                                <div class="blog__info">
                                    <h3 class="blog__title">猫にまつわるヒーリング効果とは！？プレゼントキャンペーンも実施中♪</h3>
                                    <p class="blog__date">2022.02.24</p>
                                </div>
                            </a>
                        </li>
                        <li class="blog__item">
                            <a href="#" class="blog__link">
                                <div class="blog__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/01.jpg" alt="">
                                </div>
                                <div class="blog__info">
                                    <h3 class="blog__title">ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪</h3>
                                    <p class="blog__date">2022.02.22</p>
                                </div>
                            </a>
                        </li>
                        <li class="blog__item">
                            <a href="#" class="blog__link">
                                <div class="blog__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/02.jpg" alt="">
                                </div>
                                <div class="blog__info">
                                    <h3 class="blog__title">【新宿店】ポイント2倍Day！この機会をお見逃しなく！</h3>
                                    <p class="blog__date">2021.12.24</p>
                                </div>
                            </a>
                        </li>
                        <li class="blog__item">
                            <a href="#" class="blog__link">
                                <div class="blog__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/03.jpg" alt="">
                                </div>
                                <div class="blog__info">
                                    <h3 class="blog__title">新年SEAL！療法食10%OFF&ペットアイテムおまとめ買いでプレゼント</h3>
                                    <p class="blog__date">2021.12.24</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="blog__more">
                    <a href="" class="util__link">ブログ一覧を見る</a>
                </div>
            </div>
        </section>
        <!-- /.blog -->
        <div class="about">
            <div class="about__inner inner">
                <div class="about__head">
                    <h2 class="util__title">サイトについて</h2>
                    <p class="util__subTitle">About</p>
                </div>
                <div class="about__wrap">
                    <div class="about__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about_01.png" alt="">
                    </div>
                    <div class="about__body">
                        <div class="about__title">ペットと人との笑顔ある未来の創造</div>
                        <p class="about__text">
                            家族の絆を深める、子供の情操教育、ヒーリング効果など、<br>
                            ペットと暮らすメリットが証明されてきており、<br>
                            それらの効果は人々の暮らしに必要不可欠な&quot;笑顔&quot;を<br>
                            もたらすことができます。<br>
                            CAT BELLは、ペットというかけがえのない生命を<br>
                            お客様へご提供することで、笑顔ある未来を創造し、<br>
                            より豊かな社会環境の構築に貢献いたします。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.about -->
    </main>
    <?php get_footer(); ?>
</body>

</html>