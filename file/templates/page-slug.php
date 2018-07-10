<?php
/*
Template Name: Page Template
*/

  // pタグが自動挿入されるのを防ぐ
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );

  // Smart Custom Fieldsを使う場合は指定
  $cf = SCF::gets();

  // メタ情報を取得
  $meta_path = get_the_permalink();
  $meta_title = get_the_title();
  $meta_description = get_the_excerpt();
  $meta_keywords = '';
  $meta_ogp_type = 'website';

  include( TEMPLATEPATH. '/header.php' );
?>

<?php
  include( TEMPLATEPATH. '/footer.php' );
?>
