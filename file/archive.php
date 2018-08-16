<?php
  // ページの固有変数を定義
  $page_id = 'archive';

  // メタ情報を定義
  $meta_path = get_post_type_archive_link( 'posttype' );
  $meta_title = date( 'Y', get_post_time() );
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
