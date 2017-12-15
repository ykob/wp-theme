<?php
  // サムネイルサイズを定義
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'thumb-adjacent', 300, 210, true );

  // サムネイルにsrcsetが自動付与されてしまうのを解除
  add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );
?>
