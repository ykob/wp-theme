<?php
  // pタグが自動挿入されるのを防ぐ
  remove_filter('the_content', 'wpautop');
  remove_filter( 'the_excerpt', 'wpautop' );

  // Smart Custom Fieldsのデータを取得
  $cf = SCF::gets();

  // メタ情報を取得
  $meta_path = get_the_permalink();
  $meta_title = get_the_title();
  $meta_description = get_the_excerpt();
  $meta_keywords = '';
  $meta_ogp_type = 'article';

  // 共通ヘッダを読み込み
  include 'header.php';

  // 本文を読み込み
  while( have_posts() ) {
    the_post();
    the_content();
  }

  // 共通フッタを読み込み
  get_footer();
?>
