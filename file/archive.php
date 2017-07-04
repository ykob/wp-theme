<?php
  $meta_path = get_post_type_archive_link( 'posttype' );
  $meta_title = date( 'Y', get_post_time() );
  $meta_description = '';
  $meta_keywords = '';

  include 'header.php';
?>

<?php
  get_footer();
?>
