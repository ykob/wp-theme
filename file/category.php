<?php
  $category_id = get_query_var( 'cat' );
  $category_name = get_the_category_by_ID( $category_id );

  $meta_path = get_category_link( $category_id );
  $meta_title = $category_name. 'カテゴリの記事一覧';
  $meta_description = category_description( $category_id );
  $meta_keywords = '';

  include 'header.php';
?>

<?php
  get_footer();
?>
