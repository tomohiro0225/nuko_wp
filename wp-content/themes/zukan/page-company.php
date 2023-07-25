<?php get_header(); ?>

    <main class="contents" id="zukanTop">
        <!-- ページルート -->
    <p class="linkRoute commonWidth">
        <a href="localhost"><span class="linkRoute__top">鉄道図鑑</span></a>
        <span class="linkRoute__right">></span>
        <span class="linkRoute__nowPage">鉄道会社</span>
    </p>

    <!-- ページタイトル -->
    <h2 class="c-page_title">
        <span class="c-page_title__span">鉄道会社</span>
    </h2>

    <!-- 会社別メニュー -->
    <section class="commonWidth">
        
        <h3 class="c-sectionTitle">車両別メニュー(JR)</h3>
        <div class="p-companyList">
            <a href="./zukan_company.html" class="p-companyList__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/JR-West_banner.png" alt="">
            </a>
        </div>

        <h3 class="c-sectionTitle">車両別メニュー(大手私鉄・準大手私鉄)</h3>
        <div class="p-companyList">
            <a href="./zukan_company.html" class="p-companyList__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/hanshin_banner.png" alt="">
            </a>
            <a href="./zukan_company.html" class="p-companyList__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/sanyo_banner.png" alt="">
            </a>
        </div>

    </section>
</main>

   <?php get_footer(); ?>
</body>
</html>