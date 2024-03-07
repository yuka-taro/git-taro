<aside id="secondary">
    <div class="page-news-side side-recently">
      <h4 class="news-side__title">最近の記事</h4>
      <p class="side__title-border"></p>

    <div class="recently_items">
    <?php 
      $news_posts = get_specific_posts( 'post', 'category', 'news', 5, 1 );
      if ( $news_posts->have_posts() ):
        while( $news_posts->have_posts() ): $news_posts->the_post();
    ?>

      <a class="recently-item" href="<?php the_permalink(); ?>">
        <div class="recentrly-img">
        <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
          <?php endif; ?>
        </div>
        <div class="recently__text-box">
          <p class="recently-text"><?php echo get_flexible_excerpt( 20 ); ?></p>
          <time class="recently-time"><?php the_time('Y.m.d')?></time>
        </div>
      </a>

      <?php 
          endwhile;
          wp_reset_postdata();
        endif; 
      ?>
    </div>
    
    </div><!-- page-news-recently -->
  
    <div class="page-news-side">
      <h4 class="news-side__title">カテゴリ</h4>
      <p class="side__title-border"></p>
  
      <div class="category__item-box">

      <?php 
        $news_posts = get_specific_posts( 'post', 'category', 'news', 5, 1 );
        if ( $news_posts->have_posts() ):
          while( $news_posts->have_posts() ): $news_posts->the_post();
         ?>
        <a href="<?php the_permalink(); ?>" class="page-news-category__item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img_arrow-pagenation.png" alt="">

          <?php
              $category = get_the_category();
              $cat_name = $category[0]->cat_name;   //カテゴリー名取得
            ?>
          <span class="page-news-category__name"><?php echo $cat_name; ?></span>
        </a>

        <?php
          endwhile;
           wp_reset_postdata();
        endif;
       ?>

      </div>
    </div>  
  </aside>