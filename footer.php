<footer class="toppage__footer">
    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/bg_bread.png" alt="食パン" class="bg_bread">
    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/img_balloon-access.png" alt="吉祥寺駅から徒歩５分" class="balloon-access">

    <div class="access__inner">
      <div class="section-title footer__section-title">
        <h2 class="main-title footer__main-title">ACCESS</h2>
        <p class="sub-title">アクセス</p>
      </div>

      <div class="access__contents">
        <div class="map__iframe">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.037029172726!2d139.57763767570083!3d35.70070637890408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee39b555205f%3A0xabb26a0a2fbda595!2z44CSMTgwLTAwMDMg5p2x5Lqs6YO95q2m6JS16YeO5biC5ZCJ56Wl5a-65Y2X55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1707609220088!5m2!1sja!2sjp"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="access__text-box">
          <div class="access__text-left">
            <div class="access__info access__info-address">
              <p class="access__info-name">住所</p>
              <p class="access__info-content access__info-content-time">〒000-0000<br>
                東京都武蔵野市吉祥寺南町一丁目</p>
            </div>
            <div class="access__info">
              <p class="access__info-name">TEL</p>
              <p class="access__info-content"><a href="tel:0123-456-789">0123-456-789</a></p>
            </div>
            <div class="access__info">
              <p class="access__info-name">Mail</p>
              <p class="access__info-content">example@mail.com</p>
            </div>
          </div><!-- left -->
          <div class="access__text-right">
            <div class="access__info access__info-time">
              <p class="access__info-name">営業時間 </p>
              <p class="access__info-content access__info-content-time">7:00〜21:00<br>
                ※ラストオーダー 20:30</p>
            </div>
            <div class="access__info">
              <p class="access__info-name">定休日</p>
              <p class="access__info-content">水曜日</p>
            </div>
            <div class="access__info">
              <p class="access__info-name">座席</p>
              <p class="access__info-content ">テーブル20席 ／ カウンター席6席</p>
            </div>
          </div><!-- right -->
        </div>
      </div>
    </div><!-- inner -->
    <div class="footer__copyright">
      <ul class="footer__sns-list">
        <li class="sns-list-item"><a href=""><iconify-icon icon="mdi:twitter" style="color: #fff;" width="32px" height="32px"></iconify-icon></a></li>
        <li class="sns-list-item"><a href=""><iconify-icon icon="mdi:instagram" style="color: #fff;" width="32px" height="32px"></iconify-icon></a></li>
        <li class="sns-list-item"><a href=""><iconify-icon icon="mingcute:youtube-fill" style="color: #fff;" width="32px" height="32px"></iconify-icon></a></li>
      </ul>
      <small class="copyright">©︎2000-2021 open cafe. All Rights Reserved.</small>

      <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/bg_coffee-beans3.png" alt="コーヒー豆" class="bg_coffee-beans3">
      <a href="#" class="icon_arrow" id="page-top"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/icon_arrow-top.png" alt="ページトップボタン" class=""></a>
    </div>
  </footer>

 
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <?php wp_footer(); ?>
</body>
</html>