<?php
  $meta_path = get_the_permalink();
  $meta_title = get_the_title();
  $meta_description = get_the_excerpt();
  $meta_keywords = '';

  include 'header.php';
?>

<?php
  get_footer();
?>