<?php get_header(); ?>

<section class="single-page-news">
  
<div class="bread-crumbs">
  <?php
  if ( function_exists( 'bcn_display' ) ):
    bcn_display();
  endif;
  ?>
</div>

  <div class="single-news__content">

<?php
  if ( have_posts() ):
    while ( have_posts() ) : the_post();
      get_template_part( 'content-single' );
    endwhile;
  endif;
?>

  <!-- pagination -->
  <div class="single-page__pagination">

  <?php 
  $next_post = get_next_post();
  $prev_post = get_previous_post();
  if ( $next_post ):
  ?>

  <a class="news__pagination-prev single-page__pagination-prev single-page__page-numbers" href="<?php echo get_permalink( $next_post->ID );?>">
    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_arrow-pagenation.png" alt=""><span class="single-page__pagination-ja">前の記事</span>
  </a>

  <button class="single-page__button" type="button" id="button" onclick="javascript:location.href ='http://open-cafe.local/archives/category/news' ;">記事一覧</button>
  
  <?php
  endif;
  if ( $prev_post ):
  ?>

  <a class="single-page__pagination-next single-page__page-numbers" href="<?php echo get_permalink( $prev_post->ID );?>">
    <span class="single-page__pagination-ja">次の記事</span>
    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_arrow-pagenation.png" alt="">
  </a>

  <?php endif; ?>

  </div><!-- /pagination -->
</div><!-- singe-news__content -->

  <div class="related-article">
    <p class="related-article__title">関連記事</p>

    <div class="page-news-cat-flex related-article-box single-page-news-cat-flex">

    <?php 
      $news_posts = get_specific_posts( 'post', 'category', 'news', 6, 1 );
      if ( $news_posts->have_posts() ):
        while( $news_posts->have_posts() ): $news_posts->the_post();
    ?>
      <a href="<?php the_permalink(); ?>" class="news-cat page-news-cat  related-article-cat ">
        <div class="news-cat-position">

        <?php
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;   //カテゴリー名取得
        ?>
          <div class="news-cat-tag">
            <h3><?php echo $cat_name; ?></h3>
          </div>
        </div>
        <div class="news__img page-news-img related-article__img"><?php the_post_thumbnail(); ?></div>
        <h4 class="news__title related-article__cat-title"><?php the_title(); ?></h4>
        <time class="news-time"><?php the_time('Y.m.d')?></time>
      </a>
    <?php
        endwhile;
        wp_reset_postdata();
      endif;
    ?>
      
    </div>
  </div><!-- related-article -->

</section>

<?php get_footer(); ?>