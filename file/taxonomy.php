<?php
  $tax_name = 'tax_news';
  $term_data = get_term_by('slug', $term, $tax_name);
  $meta_path = get_term_link($term, $tax_name);
  $meta_title = $term_data->name. 'カテゴリの記事一覧';
  $meta_description = $term_data->description;
  $meta_keywords = '';
  $og_type = 'website';

  include 'header.php';
?>

<?php
  get_footer();
?>
