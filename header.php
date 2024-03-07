<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 検索結果に表示しない -->
  <meta name="robots" content="noindex">
  <title><?php echo esc_html( wp_get_document_title() ); ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Serif+JP:wght@500;700&family=Patua+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() ); ?>/css/rest.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="all-inner">
    
    <!-- drawer-content -->
	  <div id="js-drawer-content" class="drawer-content">
			<nav class="drawer-nav">
        <?php
          wp_nav_menu (
            array (
              'theme_location' => 'drawer',
              'container' => false,
              'menu_class' => 'drawer-list',
            )
          );
        ?>

        <ul class="sns-list">
          <li class="sns-list-item"><a href=""><iconify-icon icon="mdi:twitter" style="color: #fff;" width="35px" height="35px"></iconify-icon></a></li>
          <li class="sns-list-item"><a href=""><iconify-icon icon="mdi:instagram" style="color: #fff;" width="35px" height="35px"></iconify-icon></a></li>
          <li class="sns-list-item"><a href=""><iconify-icon icon="mingcute:youtube-fill" style="color: #fff;" width="35px" height="35px"></iconify-icon></a></li>
        </ul>
			</nav>
	  </div><!-- /drawer-content -->

    <?php if( is_front_page() ): ?>
    <header class="header">
      <h1 class="header__logo hidden-pc">
        <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/logo_sp.png" alt="Open Cafe" class="hidden-pc"></a>
      </h1>
      <button id="js-drawer-icon" class="header__open drawer-icon hidden-pc">
        <span class="drawer-icon__bar"></span>
        <span class="drawer-icon__bar"></span>
        <span class="drawer-icon__bar"></span>
      </button>

      <div class="pc-drawer-icon hidden-sp">
        <div class="overlay hidden-sp" id="js-overlay"></div>
        <button id="js-drawer-icon-pc" class="header__open icon-position hidden-sp">
          <span class="drawer-icon__bar-pc"></span>
          <span class="drawer-icon__bar-pc"></span>
          <span class="drawer-icon__bar-pc"></span>
        </button>
      </div>

      <div class="mv-flex">
        <div class="menu-nav hidden-sp">
          <h1 class="header-pc-logo">
            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/logo_pc.png" alt="Open Cafe" class="hidden-sp"></a>
          </h1>
          <nav class="mv__nav">
            <div class="mv-nav__inner">
              <ul class="mv-list">
              <?php
                  wp_nav_menu (
                    array (
                      'theme_location' => 'global',
                      'container' => false,
                      'menu_class' => 'mv__link',
                     )
                  );
                ?>
              </ul>
              <ul class="mv-nav__sns-list">
                <li class="sns-list-item"><a href=""><iconify-icon icon="mdi:twitter"  style="color: #222;" width="19px" height="19px"></iconify-icon></a></li>
                <li class="sns-list-item"><a href=""><iconify-icon icon="mdi:instagram" style="color: #222;" width="19px" height="19px"></iconify-icon></a></li>
                <li class="sns-list-item"><a href=""><iconify-icon icon="mingcute:youtube-fill"  style="color: #222;" width="19px" height="19px"></iconify-icon></a></li>
              </ul>
            </div>
          </nav>
        </div>
  
        <!-- swiper -->
        <div class="swiper mv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide" >
              <div class="swiper-img">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/mv-sp1.png" alt="" class="hidden-pc"/>
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/mv-pc1.png" alt="" class="hidden-sp"/>
                <div class="back-gradient hidden-sp"></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-img">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/mv-sp2.png" alt="" class="hidden-pc"/>
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/mv-pc2.png" alt="" class="hidden-sp" />
                <div class="back-gradient hidden-sp"></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-img">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/mv-sp3.png" alt="" class="hidden-pc"/>
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/mv-pc3.png" alt="" class="hidden-sp"/>
                <div class="back-gradient hidden-sp"></div>
              </div>
            </div>
          </div>
       
          <!-- ページネーション -->
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="header-text-box">
        <p class="header-text">パスタとコーヒーが<br class="hidden-pc">
          とってもおいしい、<br>
          ほっと落ち着くのんびり空間
        </p>
      </div>  

      <?php 
        $news_posts = get_specific_posts( 'post', 'category', 'news', 1 , 0 );
        if ( $news_posts->have_posts() ):
          while( $news_posts->have_posts() ): $news_posts->the_post();
      ?>
       <a class="header-cat-box" href="<?php the_permalink(); ?>" >
        <div class="picup-news" ></div>
        <?php
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;   //カテゴリー名取得
        ?>
        <div class="header-cat">
          <h3><?php echo $cat_name; ?></h3>
        </div>
        <div class="header-cat__inner">
          <div class="cat-img"><?php the_post_thumbnail(); ?></div>
          <div class="cat-text-box">
            <time class="cat-time"><?php the_time('Y.m.d')?></time>
            <p class="cat-text">
            <?php the_excerpt(); ?>
            </p>
          </div>
        </div> 
      </a>
      <?php
          endwhile;
           wp_reset_postdata();
        endif;
       ?>

    <div class="header-bg hidden-sp"></div>
  </header>

  <?php else: ?>

  <header class="page-header">
    <button id="js-drawer-icon" class="header__open drawer-icon hidden-pc">
      <span class="drawer-icon__bar"></span>
      <span class="drawer-icon__bar"></span>
      <span class="drawer-icon__bar"></span>
    </button>

    <div class="pc-drawer-icon hidden-sp">
      <div class="overlay hidden-sp" id="js-overlay"></div>
      <button id="js-drawer-icon-pc" class="header__open page-icon-position hidden-sp">
        <span class="drawer-icon__bar-pc"></span>
        <span class="drawer-icon__bar-pc"></span>
        <span class="drawer-icon__bar-pc"></span>
      </button>
    </div>

    <div class="page-concept__title">
    <?php echo get_main_image(); ?>
      <div class="page-opacity">
        <div class="page__title-border">
          <div class="page__title-border-sub">
            <h2 class="page__title"><?php echo get_main_title(); ?></h2>
            <p class="page__title-ja"><?php the_subtitle(); ?></p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <?php endif; ?>
