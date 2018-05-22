<?php
  // 指定のphpを呼び出す
  function includeMyPhpFunc( $params = array() ) {
    extract(
      shortcode_atts( array(
        'file' => 'default'
      ), $params )
    );
    ob_start();
    include(get_theme_root(). '/'. get_template(). '/template/'. $file. '.php');
    return ob_get_clean();
  }
  add_shortcode('includeMyPhp', 'includeMyPhpFunc');
?>
