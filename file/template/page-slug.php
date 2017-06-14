<?php
/*
Template Name: Page Template
*/
  $meta_path = get_the_permalink();
  $meta_title = get_the_title();
  $meta_description = get_the_excerpt();
  $meta_keywords = '';
  $og_type = 'website';
  $post = get_page($page_id);
  $data_page_id = $post->post_name;

  include(TEMPLATEPATH. '/header.php');
?>

<?php
  include(TEMPLATEPATH. '/footer.php');
?>
