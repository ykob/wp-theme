<?php
  $taxonomy = 'tax_news';
  $term_data = get_term_by( 'slug', $term, $taxonomy );

  $meta_path = get_term_link( $term, $taxonomy );
  $meta_title = $term_data->name. 'カテゴリの記事一覧';
  $meta_description = $term_data->description;
  $meta_keywords = '';
  $meta_ogp_type = 'website';

  $cf = SCF::get_term_meta( $term_data->term_id, $taxonomy ); // Smart Custom Fieldsを使う場合は指定

  include 'header.php';
?>

<?php
  get_footer();
?>
