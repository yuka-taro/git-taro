<?php get_header(); ?>

<section class="single-page-news">
  <p class="bread-crumbs">HOME > お知らせ</p>

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
    <a class="news__pagination-prev single-page__pagination-prev single-page__page-numbers" href="#"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_arrow-pagenation.png" alt=""><span class="single-page__pagination-ja">前の記事</span></a>
    <div class="single-page__button"><a href="" class="single-page__pagination-ja">記事一覧</a></div>
    <a class="single-page__pagination-next single-page__page-numbers" href="#"><span class="single-page__pagination-ja">次の記事</span><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_arrow-pagenation.png" alt=""></a>
  </div><!-- /pagination -->
</div><!-- singe-news__content -->

  <div class="related-article">
    <p class="related-article__title">関連記事</p>

    <div class="page-news-cat-flex related-article-box single-page-news-cat-flex">
      <a href="" class="news-cat page-news-cat  related-article-cat ">
        <div class="news-cat-position">
          <div class="news-cat-tag">
            <h3>カテゴリ</h3>
          </div>
        </div>
        <div class="news__img page-news-img related-article__img"><img src="./img/img_news1.png" alt="コーヒーと食パン"></div>
        <h4 class="news__title related-article__cat-title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</h4>
        <time class="news-time">2021.01.01</time>
      </a>
      <a href="" class="news-cat page-news-cat related-article-cat">
        <div class="news-cat-position">
          <div class="news-cat-tag">
            <h3>カテゴリ</h3>
          </div>
        </div>
        <div class="news__img page-news-img related-article__img"><img src="./img/img_news1.png" alt="コーヒーと食パン"></div>
        <h4 class="news__title related-article__cat-title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</h4>
        <time class="news-time">2021.01.01</time>
      </a>
      <a href="" class="news-cat page-news-cat related-article-cat">
        <div class="news-cat-position">
          <div class="news-cat-tag">
            <h3>カテゴリ</h3>
          </div>
        </div>
        <div class="news__img page-news-img related-article__img"><img src="./img/img_news1.png" alt="コーヒーと食パン"></div>
        <h4 class="news__title related-article__cat-title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</h4>
        <time class="news-time">2021.01.01</time>
      </a>
      <a href="" class="news-cat page-news-cat related-article-cat">
        <div class="news-cat-position">
          <div class="news-cat-tag">
            <h3>カテゴリ</h3>
          </div>
        </div>
        <div class="news__img page-news-img related-article__img"><img src="./img/img_news1.png" alt="コーヒーと食パン"></div>
        <h4 class="news__title related-article__cat-title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</h4>
        <time class="news-time">2021.01.01</time>
      </a>
      <a href="" class="news-cat page-news-cat related-article-cat">
        <div class="news-cat-position">
          <div class="news-cat-tag">
            <h3>カテゴリ</h3>
          </div>
        </div>
        <div class="news__img page-news-img related-article__img"><img src="./img/img_news1.png" alt="コーヒーと食パン"></div>
        <h4 class="news__title related-article__cat-title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</h4>
        <time class="news-time">2021.01.01</time>
      </a>
      <a href="" class="news-cat page-news-cat related-article-cat">
        <div class="news-cat-position">
          <div class="news-cat-tag">
            <h3>カテゴリ</h3>
          </div>
        </div>
        <div class="news__img page-news-img related-article__img"><img src="./img/img_news1.png" alt="コーヒーと食パン"></div>
        <h4 class="news__title related-article__cat-title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</h4>
        <time class="news-time">2021.01.01</time>
      </a>
    </div>
  </div><!-- related-article -->

</section>

<?php get_footer(); ?>