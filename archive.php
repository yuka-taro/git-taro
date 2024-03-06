<?php get_header(); ?>

<?php
   $cat = get_the_category();
  $catname = $cat[0]->cat_name;
?>

<section class="page-news">

  <p class="bread-crumbs">HOME > お知らせ</p>

  <div class="page-news-flex">
    <div class="page-news-left">
      <h3 class="page-news__sub-title"><?php echo $catname; ?></h3>

      <div class="page-news-cat-flex">

<?php
  if ( have_posts() ):
    while ( have_posts() ) : the_post();
      get_template_part( 'content-archive' );
    endwhile;
  endif;
?>

      </div>
    
      <!-- pagination -->
      <div class="news__pagination">
        <a class="news__pagination-prev news__page-numbers" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/img_arrow-pagenation.png" alt=""></a>
        <a class="news__page-numbers" href="#">1</a>
        <span class="news__page-numbers news-current">2</span>
        <a class="news__page-numbers" href="#">3</a>
        <a class="news__page-numbers" href="#">4</a>
        <a class="news__pagination-next news__page-numbers" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/img_arrow-pagenation.png" alt=""></a>
      </div><!-- /pagination -->
    </div>

  <div class="page-news-right">
    <div class="page-news-side side-recently">
      <p class="news-side__title">最近の記事</p>
      <p class="side__title-border"></p>
  
      <a class="recently-item">
        <div class="recentrly-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img-recentry.png" alt=""></div>
        <div class="recently__text-box">
          <p class="recently-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
          <time class="recently-time">2021.01.01</time>
        </div>
      </a>
      <a class="recently-item">
        <div class="recentrly-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img-recentry.png" alt=""></div>
        <div class="recently__text-box">
          <p class="recently-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
          <time class="recently-time">2021.01.01</time>
        </div>
      </a>
      <a class="recently-item">
        <div class="recentrly-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img-recentry.png" alt=""></div>
        <div class="recently__text-box">
          <p class="recently-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
          <time class="recently-time">2021.01.01</time>
        </div>
      </a>
      <a class="recently-item">
        <div class="recentrly-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img-recentry.png" alt=""></div>
        <div class="recently__text-box">
          <p class="recently-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
          <time class="recently-time">2021.01.01</time>
        </div>
      </a>
      <a class="recently-item">
        <div class="recentrly-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img-recentry.png" alt=""></div>
        <div class="recently__text-box">
          <p class="recently-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結…</p>
          <time class="recently-time">2021.01.01</time>
        </div>
      </a>
    </div><!-- page-news-recently -->
  
    <div class="page-news-side">
      <p class="news-side__title">カテゴリ</p>
      <p class="side__title-border"></p>
  
      <div class="category__item-box">
        <a href="" class="page-news-category__item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img_arrow-pagenation.png" alt="">
          <span class="page-news-category__name">カテゴリ名</span>
        </a>
        <a href="" class="page-news-category__item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img_arrow-pagenation.png" alt="">
          <span class="page-news-category__name">カテゴリ名</span>
        </a>
        <a href="" class="page-news-category__item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img_arrow-pagenation.png" alt="">
          <span class="page-news-category__name">カテゴリ名</span>
        </a>
        <a href="" class="page-news-category__item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img_arrow-pagenation.png" alt="">
          <span class="page-news-category__name">カテゴリ名</span>
        </a>
        <a href="" class="page-news-category__item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img_arrow-pagenation.png" alt="">
          <span class="page-news-category__name">カテゴリ名</span>
        </a>
      </div>
    </div>  
  </div>
</div>
</section>

<?php get_footer(); ?>