<?php
  // pタグが自動挿入されるのを防ぐ
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );

  // Smart Custom Fieldsを使う場合は指定
  $cf = SCF::gets();

  // ページの固有変数を定義
  $page_id = $cf['page_id'];
  $page_title = get_the_title();

  // メタ情報を定義
  $meta_path = get_the_permalink();
  $meta_title = $page_title;
  $meta_description = get_the_excerpt();
  $meta_keywords = '';

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
