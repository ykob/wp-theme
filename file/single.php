<?php
  // 投稿idを取得
  $id = get_the_id();

  // Smart Custom Fieldsを使う場合は指定
  $cf = SCF::gets();

  // ページの固有変数を定義
  $page_id = 'search';
  $post_title = get_the_title();
  $post_data = get_the_date();
  $post_terms = get_the_terms( $id, 'category or texonomy_slug' );
  $kv_array = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumnail-name', false );
  $kv_src = ( $kv_array[0] ) ? $kv_array[0] : '/img/common/thumb_default.jpg';

  // メタ情報を定義
  $meta_path = get_the_permalink();
  $meta_title = $post_title;
  $meta_description = get_the_excerpt();
  $meta_keywords = '';
  $meta_ogp_type = 'article';
  $meta_ogp_image = $kv_array[0];

  // 共通ヘッダを読み込み
  include 'header.php';

  while( have_posts() ) {
    the_post();
    the_content();
  }

  get_footer();
?>
