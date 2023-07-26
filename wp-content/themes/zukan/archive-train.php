<?php get_header(); ?>

    <main class="contents" id="company">
        
        <!-- リンクルート -->
        <p class="linkRoute commonWidth">
            <a href="http://hoshitetsu-photo.com/"><span class="linkRoute__top">ほしてつの鉄道写真館TOP</span></a>
            <span class="linkRoute__right">></span>
            <a href="./zukan_top.html"><span class="linkRoute__top">鉄道図鑑</span></a>
            <span class="linkRoute__right">></span>
            <span class="linkRoute__nowPage">阪神電気鉄道</span>
        </p>

        <!-- ページバナー -->
        <div class="banner">
            <img src="./assets/img/banner/hanshin_banner.png" alt="" id="bannerImg">
        </div>

        <!-- ピックアップ -->
    <section class="commonWidth">
        
        <h3 class="c-sectionTitle">鉄道車両ピックアップ</h3>
        <div class="p-trainList">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="p-trainList__item" >
                <img src="<?php echo get_field('train_img'); ?>" alt="<?php the_title(); ?>" class="p-trainList__img">
                <div class="p-trainList__wrap">
                    <p class="p-trainList__series">
                        <span><?php the_title(); ?></span><br>
                        <span><?php echo get_field('train_color'); ?></span>
                    </p>
                    <div class="c-btn">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>を見る！</a>
                    </div>
                </div>
            </div>
            
            <?php endwhile; endif; ?>

        </div>

    </section>   
        
        <!-- ピックアップ -->
    <section class="commonWidth">
        
        <h3 class="c-sectionTitle">鉄道車両ピックアップ</h3>
        <div class="p-trainList">
            <div class="p-trainList__item" >
                <img src="./assets/img/zukan/hanshin/hanshin_1000.jpg" alt="hanshin1000" class="p-trainList__img">
                <div class="p-trainList__wrap">
                    <p class="p-trainList__series">
                        <span>阪神電気鉄道１０００系</span><br>
                        <span>色の指定が入る</span>
                    </p>
                    <div class="c-btn">
                        <a href="./zukan_trainDetail.html">阪神電気鉄道１０００系を見る！</a>
                    </div>
                </div>
            </div>
            <div class="p-trainList__item" >
                <img src="./assets/img/zukan/hanshin/hanshin_1000.jpg" alt="hanshin1000" class="p-trainList__img">
                <div class="p-trainList__wrap">
                    <p class="p-trainList__series">
                        <span>阪神電気鉄道１０００系</span><br>
                        <span>色の指定が入る</span>
                    </p>
                    <div class="c-btn">
                        <a href="./zukan_trainDetail.html">阪神電気鉄道１０００系を見る！</a>
                    </div>
                </div>
            </div>
            <div class="p-trainList__item" >
                <img src="./assets/img/zukan/hanshin/hanshin_1000.jpg" alt="hanshin1000" class="p-trainList__img">
                <div class="p-trainList__wrap">
                    <p class="p-trainList__series">
                        <span>阪神電気鉄道１０００系</span><br>
                        <span>色の指定が入る</span>
                    </p>
                    <div class="c-btn">
                        <a href="./zukan_trainDetail.html">阪神電気鉄道１０００系を見る！</a>
                    </div>
                </div>
            </div>
        </div>

    </section>   

    </main>


    <?php get_footer(); ?>
</body>
</html>