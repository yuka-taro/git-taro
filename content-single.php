
<?php
   $cat = get_the_category();
  $catname = $cat[0]->cat_name;
?>

    <div class="thumbnail-img">
    <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
      <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
    <?php endif;?>
    </div>

    <h1 class="single-news__main-title"><?php the_title(); ?></h1>

    <div class="single-page__date">
      <time class="single-page__time"><?php the_time('Y.m.d'); ?></time>
      <span class="single-left-border"></span>
      <span class="single-page-tag"><?php echo $catname; ?></span>
    </div>

    <div class="single-page__text">
      <?php the_content(); ?>
    </div>