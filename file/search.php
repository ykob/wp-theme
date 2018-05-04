<?php
  global $wp_query;
  $keyword_search = $wp_query->query['s'];
  $meta_path = $_SERVER["HTTP_HOST"]. $_SERVER["REQUEST_URI"];
  $meta_title = '「'. $keyword_search. '」の検索結果';
  $meta_description = '「'. $keyword_search. '」の検索結果を表示しています。';
  $meta_keywords = '';
  $meta_ogp_type = 'website';

  include 'header.php';
?>

<?php
  get_footer();
?>
