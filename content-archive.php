
<?php
   $cat = get_the_category();
  $catname = $cat[0]->cat_name;
?>

<a href="<?php the_permalink(); ?>" class="news-cat page-news-cat">
  <div class="news-cat-position page-news-cat-position">
    <div class="news-cat-tag page-news-cat-tag">
      <h3><?php echo $catname; ?></h3>
    </div>
  </div>
  <div class="news__img page-news-img"><?php the_post_thumbnail(); ?></div>
  <h4 class="news__title page-news-cat__title"><?php the_title(); ?></h4>
  <time class="news-time"><?php the_time('Y.m.d')?></time>
</a>