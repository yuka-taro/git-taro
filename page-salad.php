<?php require_once 'products.php'; ?>
<?php get_header(); ?>

<section class="page-menu">

  <p class="bread-crumbs">HOME > メニュー</p>

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
  <?php foreach($salads as $product): ?>
    <div class="page-menu-item">
      <div class="page-menu-item__img"><img src="<?php echo $product->getImage(); ?>" alt=""></div>
      <p class="page-menu-item__title"><?php echo $product->getName(); ?></p>
      <p class="page-menu-item__cost"><?php echo $product->getPrice(); ?></p>
    </div>
  <?php endforeach; ?>
  </div>

</section>

<?php get_footer(); ?>