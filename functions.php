<?php 
function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");

// style.sheet読み込み

function my_script_init() {
  $uri = esc_url( get_template_directory_uri() );
  wp_enqueue_style("my", $uri . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
  wp_enqueue_script("iconify", "https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js", array(), "1.0.7", "all");
  wp_enqueue_script("my", $uri. "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}
  add_action("wp_enqueue_scripts", "my_script_init");

// カスタムメニュー

function my_menu_init() {
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'top'=>'トップメニュー'
    )
  );
}
add_action('init', 'my_menu_init');

function prefix_nav_description($item_output, $item, $depth, $args) {
  if (!empty($item->description)) {
   $item_output = str_replace('">' . $args->link_before . $item->title, '">'. $item->title . '<span>' . $item->description . '</span>', $item_output);
  }
  return $item_output;
 }
 add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 4);

//  メイン画面上にテンプレートごとの文字列を表示
function get_main_title() {
  if ( is_singular( 'post' ) ):
    $category_obj = get_the_category();
    return $category_obj[0]->name;
  elseif ( is_page() ):
    return get_the_title();
  elseif ( is_category() ):
    return single_cat_title();
  endif;

  return '' ;
}

// アイキャッチ画像を使えるようにする
add_theme_support( 'post-thumbnails' );
add_image_size('detail', 1100, 330, true);

// 各テンプレートごとのメイン画像を表示
function get_main_image() {
  if ( is_page() ):
    return get_the_post_thumbnail( get_queried_object()->ID, 'detail' );
  elseif ( is_category( 'news' ) || is_singular( 'post' ) ):
    return '<img src="'.get_template_directory_uri().'/img/bg_firstview_news.png"/>';
  endif;
}

// 記事を取得する関数
function get_specific_posts( $post_type, $taxonomy = null, $term = null, $number = -1, $offset = 0 ) {
  $args = array (
    'post_type' => $post_type,
    'tax_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $term,
      ),
    ),
    'posts_per_page' => $number,
    'offset' => $offset,
  );
  $specific_posts = new WP_Query( $args );
  return $specific_posts;
}

function page_navi() {
  the_posts_pagination(array(
    'end_size' => 1,
    'mid_size' => 1,
    'prev_next' => true,
    'prev_text' =>'<',
    'next_text' =>'>',
  ));
}

// 抜粋機能を固定ページで使えるようにする
add_post_type_support('page', 'excerpt');

// ウィジェット機能有効化
function theme_widgets_init() {
  register_sidebar(array(
    'name' =>'サイドバーウィジェットエリア',
    'id' => 'sidebar',
    'description' => 'ニュースページのサイドバー',
    'before_widget' =>'<div class="page-news-side">',
    'after_widget' => '</div>',
    'before_title' =>'<h4 class="news-side__title">',
    'after_title' => '</h4>',
  ));
}
add_action( 'widgets_init', 'theme_widgets_init');

// 抜粋の設定
function my_excerpt_length() {
  return 80;
}
add_filter('excerpt_mblength', 'my_excerpt_length');

function my_excerpt_more() {
  return'...';
} 
add_filter('excerpt_more', 'my_excerpt_more');

function get_flexible_excerpt( $number ) {
  $value = get_the_excerpt();
  $value = wp_trim_words($value, $number, '...' );
  return $value;
}
