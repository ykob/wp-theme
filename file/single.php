<?php
  // 投稿idを取得
  $id = get_the_id();

  // Smart Custom Fieldsのデータを取得
  $cf = SCF::gets();

  $kv_array = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumnail-name', false );
  $kv_src = ( $kv_array[0] ) ? $kv_array[0] : '/img/common/thumb_default.jpg';

  $meta_path = get_the_permalink();
  $meta_title = get_the_title();
  $meta_description = get_the_excerpt();
  $meta_keywords = '';
  $meta_ogp_type = 'article';
  $meta_ogp_image = $kv_array[0];

  include 'header.php';

  while( have_posts() ) {
    the_post();
    the_content();
  }

  get_footer();
?>
