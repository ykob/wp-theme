<?php
/*
Template Name: Page Template
*/

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

  include( TEMPLATEPATH. '/header.php' );
?>

<?php
  include( TEMPLATEPATH. '/footer.php' );
?>
