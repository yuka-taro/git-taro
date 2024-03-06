<?php get_header(); ?>

  <section class="concept"><!-- concept -->
    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/bg_coffee-beans.png" alt="コーヒー豆" class="bg_coffee-beans">

    <div class="concept-flex">
      <div class="concept__inner">
        <div class="section-title">
          <h2 class="main-title concept-title">CONCEPT</h2>
          <p class="sub-title concept-sub-title">当店のこだわり</p>
        </div>
        <div class="concept__heading">
          <p class="heading-text">最高のコーヒーと、<br>
            時の流れを味わうことができる<br>
            手作りカフェ<br>
          </p>
        </div>
        <div class="concept__sentence">
          <p class="sentence-text">ダミー_国内外から賞賛を<br>受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
          ダミー_国内外から賞賛を 受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          </p>
          <p class="sentence-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          </p>
        </div>

        <button class="button concept__button" type="button" id="button" onclick="javascript:location.href ='<?php echo esc_url( home_url( 'concept' ) ); ?>'; ">詳しくはこちら</button>

      </div>

      <div class="concept__img">
        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_concept.png" alt="">
      </div>
    </div> 

    <div class="concept-bg"></div>
    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/bg_coffee-leaves.png" alt="" class="bg_coffee-leaves">

  </section>

<section class="set">
  <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/comment.png" alt="" class="comment-img">

  <div class="set__inner">
    <div class="section-title">
      <h2 class="main-title set-title">SPECIAL LUNCH SET</h2>
      <p class="sub-title concept-sub-title">今月のスペシャルランチセット</p>
    </div>

    <div class="set__menu">
      <div class="set-menu-title-position">
        <div class="set-menu__title">
          <h3 class="set-menu__title-text">お好きなパスタをお選びください</h3>
        </div>
      </div>
      <div class="set__contents">
        <div class="set__menu-flex">
          <div class="set__item">
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_special_pasta1.png" alt="pasta">
            <div class="set-text__box">
              <p class="set-text__number">A</p>
              <p class="set-text__title">BBQ風コッテリパスタ</p>
            </div>
          </div>
          <div class="set__item">
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_special_pasta2.png" alt="pasta">
            <div class="set-text__box">
              <p class="set-text__number">B</p>
              <p class="set-text__title">他のよりはヘルシーなサラダ風パスタ</p>
            </div>
          </div>
          <div class="set__item">
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_special_pasta3.png" alt="pasta">
            <div class="set-text__box">
              <p class="set-text__number">C</p>
              <p class="set-text__title">色鮮やかなカラフルパスタ</p>
            </div>
          </div>
          <div class="set__item">
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_special_pasta4.png" alt="pasta">
            <div class="set-text__box">
              <p class="set-text__number">D</p>
              <p class="set-text__title">ジェノベーゼの普通のパスタ</p>
            </div>
          </div>
        </div>
        <div class="set-menu__cost-box">
          <div class="set-menu__img-box">
            <div class="set-img-box__item">
              <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/lunch-01.png" alt="pasta">
              <p class="set-item-title">パスタ</p>
            </div>
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/puls-icon.png" alt="puls" class="puls-icon">
            <div class="set-img-box__item">
              <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/lunch-02.png" alt="salad">
              <p class="set-item-title">サラダ</p>
            </div>
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/puls-icon.png" alt="puls" class="puls-icon">
            <div class="set-img-box__item">
              <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/lunch-03.png" alt="drink">
              <p class="set-item-title">ドリンク</p>
            </div>
          </div>
          <div class="set-cost__text-box">
            <p class="set-cost__title">スペシャルランチセット<br>【選べる3品】</p>
            <p class="set__cost">1,280 yen</p>
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/dot-line-sp.png" alt="" class="dot-line-sp hidden-sp">
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/dot-line-pc.png" alt="" class="dot-line-pc hidden-sp">
            <p class="set-cost__text">(11:00 AM〜14:00 PMまで)</p>
          </div>
        </div>
      </div>  
    </div>
  </div>
</section>

  <section class="g-menu">
    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/bg_coffee-leaves2.png" alt="葉っぱ" class="bg_coffee-leaves2">

    <div class="g-menu__inner">
      <div class="section-title section-g-menu-title">
        <h2 class="main-title g-menu-title">GRAND MENU</h2>
        <p class="sub-title g-menu-sub-title">グランドメニュー</p>
      </div>
      <div class="g-menu__box">
        <div class="g-menu-items">
          <h3 class="g-menu-items__title">パスタ</h3>
          <div class="g-menu-item-flex">
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_pasta1.png" alt=""></div>
              <p class="g-menu-item__title">トマトとオリーブのパスタ</p>
              <p class="g-menu-item__cost">780yen</p>
            </div>
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_pasta2.png" alt=""></div>
              <p class="g-menu-item__title">えびもりもりパスタ</p>
              <p class="g-menu-item__cost">1280yen</p>
            </div>
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_pasta3.png" alt=""></div>
              <p class="g-menu-item__title">みんな大好きカルボナーラ</p>
              <p class="g-menu-item__cost">1580yen</p>
            </div>
            <div class="g-menu-item g-menu-item-opacity">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_salad3.png" alt=""></div>
              <p class="g-menu-item__title">とってもシンプルサラダ</p>
              <p class="g-menu-item__cost">500yen</p>
            </div>
          </div>
        </div>
        <div class="g-menu-items">
          <h3 class="g-menu-items__title">サラダ</h3>
          <div class="g-menu-item-flex g-menu-item-flex-salad">
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_salad1.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">健康ダイエットサラダ</p>
              <p class="g-menu-item__cost">880yen</p>
            </div>
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_salad2.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">えびいっぱいサラダ</p>
              <p class="g-menu-item__cost">1080yen</p>
            </div>
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_salad3.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">とってもシンプルサラダ</p>
              <p class="g-menu-item__cost">500yen</p>
            </div>
            <div class="g-menu-item g-menu-item-opacity">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_salad3.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">とってもシンプルサラダ</p>
              <p class="g-menu-item__cost">500yen</p>
            </div>
          </div>
        </div>
        <div class="g-menu-items">
          <h3 class="g-menu-items__title">パン & スイーツ</h3>
          <div class="g-menu-item-flex g-menu-item-flex2">
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_sweets1.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">ぐるぐるシュガーパン</p>
              <p class="g-menu-item__cost">280yen</p>
            </div>
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_sweets2.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">チョコ丸ごとワッサン</p>
              <p class="g-menu-item__cost">180yen</p>
            </div>
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_sweets3.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">ロングシュー</p>
              <p class="g-menu-item__cost">280yen</p>
            </div>
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_sweets4.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">チーズケーキ</p>
              <p class="g-menu-item__cost">380yen</p>
            </div>
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_sweets5.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">バレンタインロン</p>
              <p class="g-menu-item__cost">480yen</p>
            </div>
            <div class="g-menu-item">
              <div class="g-menu-item__img"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_sweets6.png" alt=""></div>
              <p class="g-menu-item__title g-menu-item__title-salad">いちごジャムクッキー</p>
              <p class="g-menu-item__cost">380yen</p>
            </div>
          </div>
        </div>

        <div class="menu-items-drink">
          <h3 class="g-menu-items__title">ドリンク</h3>
          <div class="menu-item-drink-flex">
            <div class="menu-drink__img hidden-sp"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_drink.png" alt="コーヒーにミルクを入れているところ"></div>
            <div class="menu-drink__item">
              <h4 class="menu-drink__item-title">コーヒー</h4>
              <div class="drink-boxes">
                <div class="drink-box">
                  <p class="menu-drink__item-name menu-drink__item-name-first">ブレンド</p>
                  <p class="menu-drink__item-cost menu-drink__item-cost-first">500 yen</p>
                </div>
                <div class="drink-box drink-box2">
                  <p class="menu-drink__item-name ">カフェラテ</p>
                  <p class="menu-drink__item-cost">220 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">豆乳ラテ</p>
                  <p class="menu-drink__item-cost">280 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">カフェモカ</p>
                  <p class="menu-drink__item-cost">280 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">キャラメルラテ</p>
                  <p class="menu-drink__item-cost">320 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">バニララテ</p>
                  <p class="menu-drink__item-cost">320 yen</p>
                </div>
              </div>
            </div>
            <div class="menu-drink__item">
              <h4 class="menu-drink__item-title">紅茶</h4>
              <div class="drink-boxes">
                <div class="drink-box">
                  <p class="menu-drink__item-name menu-drink__item-name-first">ストレート</p>
                  <p class="menu-drink__item-cost menu-drink__item-cost-first">180 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">ミルク</p>
                  <p class="menu-drink__item-cost">200 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">レモン</p>
                  <p class="menu-drink__item-cost">200 yen</p>
                </div>
              </div>
            </div>
            <div class="menu-drink__item">
              <h4 class="menu-drink__item-title">ソフトドリンク</h4>
              <div class="drink-boxes">
                <div class="drink-box">
                  <p class="menu-drink__item-name menu-drink__item-name-first">バナナ</p>
                  <p class="menu-drink__item-cost menu-drink__item-cost-first">220 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">オレンジ</p>
                  <p class="menu-drink__item-cost">180 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">アップル</p>
                  <p class="menu-drink__item-cost">180 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">マンゴー</p>
                  <p class="menu-drink__item-cost">220 yen</p>
                </div>
                <div class="drink-box">
                  <p class="menu-drink__item-name">ミックス</p>
                  <p class="menu-drink__item-cost">280 yen</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button class="button news__button" type="button" id="button" onclick="javascript:location.href ='<?php echo esc_url( home_url( 'menu' ) ); ?>' ;">その他のメニュー</button>

    </div>

    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/bg_coffee-beans2.png" alt="" class="bg_coffee-beans2">
  </section>

  <section class="gallery">
    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/gallery_comment.png" alt="" class="gallery_comment">

    <div class="gallery__inner">
      <div class="section-title">
        <h2 class="main-title gallery__main-title">GALLERY</h2>
        <p class="sub-title gallery__sub-title">ギャラリー</p>
      </div>

      <div class="gallery__img-box">
        <div class="gallery__img-item"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_gallery1.png" alt=""></div>
        <div class="gallery__img-item"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_gallery2.png" alt=""></div>
        <div class="gallery__img-item"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_gallery3.png" alt=""></div>
        <div class="gallery__img-item"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_gallery4.png" alt=""></div>
      </div>

      <button class="button gallery__button" type="button" id="button" onclick="javascript:location.href = 'https://www.instagram.com'">インスタグラムを見る</button>
    </div>

  </section>

  <section class="news" id="news">
    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/bg_plate.png" alt="" class="bg_plate">

    <div class="news__inner">

    <?php $term_obj = get_term_by('slug', 'news','category'); ?>
      <div class="section-title">
        <h2 class="main-title news__main-title"><?php echo $term_obj->name; ?></h2>
        <p class="sub-title news__sub-title">お知らせ</p>
      </div>
      
      <div class="news__inner-flex">
      <?php 
        $news_posts = get_specific_posts( 'post', 'category', 'news', 1 , 0 );
        if ( $news_posts->have_posts() ):
          while( $news_posts->have_posts() ): $news_posts->the_post();
         ?>
        <a class="news-big" href="<?php the_permalink(); ?>">
          <div class="news-big-cat-position">
          <?php
            $category = get_the_category();
            $cat_name = $category[0]->cat_name;   //カテゴリー名取得
          ?>
            <div class="news-big-cat">
              <h3><?php echo $cat_name; ?></h3>
            </div>
          </div>  
          <div class="news-big__img"><?php the_post_thumbnail(); ?></div>
          <h4 class="news-big__title"><?php the_title(); ?></h4>
          <p class="news__text"><?php the_excerpt(); ?></p>
          <time class="news-time"><?php the_time('Y.m.d')?></time>
        </a>
        <?php
          endwhile;
           wp_reset_postdata();
        endif;
       ?>

        <div class="news__cat-flex">

        <?php 
        $news_posts = get_specific_posts( 'post', 'category', 'news', 4 , 1 );
        if ( $news_posts->have_posts() ):
          while( $news_posts->have_posts() ): $news_posts->the_post();
         ?>

          <a class="news-cat" href="<?php the_permalink(); ?>">
            <div class="news-cat-position">
            <?php
              $category = get_the_category();
              $cat_name = $category[0]->cat_name;   //カテゴリー名取得
            ?>
              <div class="news-cat-tag">
                <h3><?php echo $cat_name; ?></h3>
              </div>
            </div>
            <div class="news__img"><?php the_post_thumbnail(); ?></div>
            <h4 class="news__title"><?php the_title(); ?></h4>
            <time class="news-time"><?php the_time('Y.m.d')?></time>
          </a>

        <?php
          endwhile;
           wp_reset_postdata();
        endif;
       ?>
        </div>
      </div>

      <button class="button news__button" type="button" id="button" onclick="javascript:location.href = '<?php echo esc_url( get_term_link( $term_obj ) ); ?>';">過去のお知らせ</button>


    </div><!-- inner -->
  </section><!-- news -->

  <?php get_footer(); ?>