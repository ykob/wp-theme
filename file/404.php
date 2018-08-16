<?php
  // ページの固有変数を定義
  $page_id = 'error';

  // メタ情報を定義
  $meta_path = $website_domain. '/error/404.html';
  $meta_title = '404 Not Found';
  $meta_description = '';
  $meta_keywords = '';
  $meta_ogp_type = null;
  $meta_ogp_image = null;

  // 共通ヘッダを読み込み
  include 'header.php';
?>

<?php
  get_footer();
?>
