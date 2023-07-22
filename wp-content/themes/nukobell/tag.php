<?php get_header(); ?>
<!-- main -->
    <main class="main cntInner inner">
    <!-- パンくずリスト -->
        <nav>
            <ol class="breadcrumbs">
				<li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
				<li class="breadcrumbs__item"><a href="archive.html" class="breadcrumbs__link">ブログ一覧</a></li>
				<li class="breadcrumbs__item">#ヘルスケアのブログ</li>
            </ol>
        </nav>
    <!-- /パンくずリスト -->
    <!-- content -->
        <section class="content">
            <div class="archive">
                <div class="archive__wrap">
                    <?php 
                    $tag = get_queried_object();
                    $args = array(
                        'tag' => $tag->slug,//タグ
                        'post_type' => 'blog',//ポストタイプのスラッグ
                        'order' => 'DESC',//並び順、DESCは最新ジュン
                        'post_per_page' => -1//何件表示するか？
                    );
                        $my_query = new WP_Query($args);//$my_queryに$argsを入れている
                        if($my_query->have_posts()) :
                        while ($my_query->have_posts()) : $my_query->the_post();
                    ?>
					<div class="archive__card">
                        <a href="<?php the_permalink(); ?>" class="archive__cardLink">
                            <div class="archive__cardWrap">
                                <div class="archive__img">
                                    <img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title(); ?>">
                                </div>
                                <div class="archive__content">
                                    <span class="date"><?php echo the_time('Y.m.d'); ?></span>
                                    <div class="archive__ttl"><?php echo the_title(); ?></div>
                                    <div class="archive__txt"><?php echo the_content(); ?></div>
                                </div>
                            </div>
                        </a>
                        <div class="archive__tagItems">
                            <?php the_tags('<div href="#" class="tag top__tag">','</div><div href="#" class="tag top__tag">','</div>'); ?>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            

            <?php get_template_part('_inc/sidebar'); ?>
        </section>
    <!-- /content -->
    </main>
<!-- /main -->

<!-- footer -->
<?php get_footer(); ?>
<!-- /footer -->

<!-- WordPress用テンプレートタグ -->
<!-- <?php wp_footer(); ?> -->
</body>
</html>