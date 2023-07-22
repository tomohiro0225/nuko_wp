<div class="side">
                <div class="pickup">
                    <h3 class="pickup__topTtl">ピックアップ</h3>

                    <?php 
                        $args = array(
                            'post_type' => 'blog',//ポストタイプのスラッグ
                            'order' => 'DESC',//並び順、DESCは最新ジュン
                            'posts_per_page' => 3,//何件表示するか？
                            'meta_key' => 'blog_pickup',//カスタムフィールドスラッグ名
                            'meta_value' => 'on',//チェックボックスのkey
                            'meta_compare' => 'LIKE'//一致しているかしていないか？
                        );
                            $my_query = new WP_Query($args);//my_queryにargsを入れている
                            if($my_query->have_posts()) :
                            while ($my_query->have_posts()) : $my_query->the_post();
                    ?>
                    <a href="#" class="pickup__card">
                        <div class="pickup__img">
                            <img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title(); ?>">
                        </div>
                        <div class="pickup__ttl"><?php echo the_title(); ?></div>
                        <span class="date pickup__date"><?php echo the_time('Y.m.d'); ?></span>
                    </a>
                    <?php endwhile; endif; ?>

                </div>
                <div class="keyword">
                    <h3 class="keyword__topTtl">キーワード</h3>
                    <ul class="keyword__tagItems">
                        <?php 
                            $posttags = get_tags();
                            if($posttags) :
                            foreach($posttags as $tag) :
                        ?>
                        <li class="keyword__tagItem"><a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag keyword__tag"><?php echo $tag->name; ?></a></li>
                        <?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>