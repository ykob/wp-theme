<?php
  global $wp_query;
  $keyword_search = $wp_query->query['s'];

  // ページの固有変数を定義
  $page_id = 'search';

  // メタ情報を定義
  $meta_path = $_SERVER["HTTP_HOST"]. $_SERVER["REQUEST_URI"];
  $meta_title = '「'. $keyword_search. '」の検索結果';
  $meta_description = '「'. $keyword_search. '」の検索結果を表示しています。';
  $meta_keywords = '';
  $meta_ogp_type = null;
  $meta_ogp_image = null;

  // 共通ヘッダを読み込み
  include 'header.php';
?>

<?php
  get_footer();
?>
