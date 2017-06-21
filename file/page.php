<?php
  $meta_path = get_the_permalink();
  $meta_title = get_the_title();
  $meta_description = get_the_excerpt();
  $meta_keywords = '';
  $meta_ogp_type = 'article';

  include 'header.php';
?>

<?php
  while( have_posts() ) {
    the_post();
    the_content();
  }
?>

<?php
  get_footer();
?>
