<?php
  $id = get_the_id();
  $kv_array = wp_get_attachment_image_src( get_post_thumbnail_id(), true );
  $kv_src = $kv_array[0];
  
  $meta_path = get_the_permalink();
  $meta_title = get_the_title();
  $meta_description = get_the_excerpt();
  $meta_keywords = '';
  $og_type = 'article';

  include 'header.php';
?>

<?php
  get_footer();
?>
