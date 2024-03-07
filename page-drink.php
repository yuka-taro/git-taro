<?php require_once 'products.php'; ?>
<?php get_header(); ?>

<section class="page-menu">

<div class="bread-crumbs">
  <?php
  if ( function_exists( 'bcn_display' ) ):
    bcn_display();
  endif;
  ?>
</div>

  <nav class="menu-select">
  <?php
      wp_nav_menu (
        array (
          'theme_location' => 'top',
          'container' => false,
          'menu_class' => 'menu-select__button',
        )
      );
  ?>
  </nav>

  <div class="page-menu-items">
  <?php foreach($drinks as $product): ?>
    <div class="page-menu-item">
      <div class="page-menu-item__img"><img src="<?php echo $product->getImage(); ?>" alt=""></div>
      <p class="page-menu-item__title"><?php echo $product->getName(); ?></p>
      <p class="page-menu-item__cost"><?php echo $product->getPrice(); ?></p>
    </div>
  <?php endforeach; ?>
  </div>

</section>

<?php get_footer(); ?>