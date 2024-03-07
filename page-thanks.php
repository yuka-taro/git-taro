<?php get_header(); ?>

<div class="bread-crumbs">
  <?php
  if ( function_exists( 'bcn_display' ) ):
    bcn_display();
  endif;
  ?>
</div>

  <div class="page-contact-added__contents">
    <div class="added-main__message">送信が完了しました</div>
    <p class="added-sub__message">お問い合わせありがとうございました。<br>
      3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。</p>
  </div>  
</section> 

<?php get_footer(); ?>