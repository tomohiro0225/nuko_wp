<?php get_header(); ?>

<!-- 
    https://plusers.net/wordpress_related_post
    👆他の記事出力を参考にした記事
 -->

    <main class="contents" id="Detail">
        
        <!-- リンクルート -->
        <p class="linkRoute commonWidth">
            <a href="http://hoshitetsu-photo.com/"><span class="linkRoute__top">ほしてつの鉄道写真館TOP</span></a>
            <span class="linkRoute__right">></span>
            <a href="./zukan_top.html"><span class="linkRoute__top">鉄道図鑑</span></a>
            <span class="linkRoute__right">></span>
            <a href="" id="company_name"><span class="linkRoute__top" >阪神電気鉄道</span></a>
            <span class="linkRoute__right">></span>
            <span class="linkRoute__nowPage">
                <span >阪神電気鉄道</span>
                <span >1000系</span>
                <span>色の指定が入る</span>
            </span>
        </p>


        <!-- 車両写真 -->
        <div class="p-trainImg">
            <p class="p-trainImg__series">
                <span></span><br>
                <span class="p-trainImg__series__span"><?php echo get_field('train_color'); ?></span>
            </p>
            <div class="p-trainImg__wrap">
                <img src="<?php echo get_field('train_img'); ?>" alt="<?php the_title(); ?>" class="p-trainImg__image">
                <p class="p-trainImg__place">(撮影地:<span><?php echo get_field('train_place'); ?></span>)</p>
            </div>
        </div>

        <!-- 車両説明 -->
        <section class="commonWidth">
            
            <h3 class="c-sectionTitle mt-20">車両データ</h3>
            <div class="trainData">
                <span>・運行路線</span><br>
                <span>(自社線)<?php echo get_field('train_route_company'); ?></span><br>
                <span>(直通先路線)<?php echo get_field('train_route_other-company'); ?></span><br><br>
                <span>・車両説明</span><br>
                <span><?php echo get_field('train_explanation'); ?></span>
            </div>

        </section>
         <!-- ピックアップ -->
    <section class="commonWidth">
        
        <h3 class="c-sectionTitle">鉄道車両ピックアップ</h3>
        <div class="p-trainList">

            <?php if(has_category() ) {
            $cats =get_the_category();
            $catkwds = array();
            foreach($cats as $cat){
                $catkwds[] = $cat->term_id;
            }
            } ?>
            	
            <?php $args = array(
            'post_type' => 'train',
            'posts_per_page' => '6',
            'post__not_in' =>array( $post->ID ),
            'category__in' => $catkwds,
            'orderby' => 'rand'
            );
            $my_query = new WP_Query( $args );?>
            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
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
            
            	
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
                    
        </div>

    </section>   

    </main>

    <?php get_footer(); ?>
</body>
</html>