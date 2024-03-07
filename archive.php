<?php get_header(); ?>

<?php
   $cat = get_the_category();
  $catname = $cat[0]->cat_name;
?>

<section class="page-news">

<div class="bread-crumbs">
  <?php
  if ( function_exists( 'bcn_display' ) ):
    bcn_display();
  endif;
  ?>
</div>

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

      <?php page_navi(); ?>

    </div>
    <div class="page-news-right">
      <?php get_sidebar(); ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>