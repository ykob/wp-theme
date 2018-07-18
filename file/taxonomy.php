<?php
  // Smart Custom Fieldsを使う場合は指定
  $cf = SCF::get_term_meta( $term_data->term_id, $taxonomy );

  // ページの固有変数を定義
  $taxonomy = 'tax_news';
  $term_data = get_term_by( 'slug', $term, $taxonomy );

  // メタ情報を定義
  $meta_path = get_term_link( $term, $taxonomy );
  $meta_title = $term_data->name. 'カテゴリの記事一覧';
  $meta_description = $term_data->description;
  $meta_keywords = '';
  $meta_ogp_type = 'website';

  include 'header.php';
?>

<?php
  get_footer();
?>
