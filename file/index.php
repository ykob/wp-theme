<?php
  // ページの固有変数を定義
  $page_id = 'index';

  // メタ情報を定義
  $meta_path = get_bloginfo( 'url' );
  $meta_title = null;
  $meta_description = get_bloginfo( 'description' );
  $meta_keywords = '';
  $meta_ogp_type = null;
  $meta_ogp_image = null;

  // 共通ヘッダを読み込み
  include 'header.php';
?>

<?php
  get_footer();
?>
