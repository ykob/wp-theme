<?php
  // ページの固有変数を定義
  $page_id = 'index';

  // メタ情報を定義
  $meta_path = get_bloginfo( 'url' );
  $meta_description = get_bloginfo( 'description' );
  $meta_keywords = '';

  include 'header.php';
?>

<?php
  get_footer();
?>
