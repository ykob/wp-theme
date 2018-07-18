<?php
  // ページの固有変数を定義
  $page_id = 'archive';

  // メタ情報を定義
  $meta_path = get_post_type_archive_link( 'posttype' );
  $meta_title = date( 'Y', get_post_time() );
  $meta_description = '';
  $meta_keywords = '';

  include 'header.php';
?>

<?php
  get_footer();
?>
