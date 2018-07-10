<?php
  // 指定のphpを呼び出す
  function include_myphp_func( $params = array() ) {
    extract(
      shortcode_atts( array(
        'file' => 'default'
      ), $params )
    );
    ob_start();
    include( get_theme_root(). '/'. get_template(). '/template/'. $file. '.php' );
    return ob_get_clean();
  }
  add_shortcode( 'include_myphp', 'include_myphp_func' );

  // 記事一覧を生成する
  function get_posts_func( $args ) {
    global $post;

    extract( $args );
    ob_start();

    $posts_args = array(
      'post_type' => array( 'post' ),
      'posts_per_page' => 3,
    );
    $posts_array = get_posts( $posts_args );
    $posts_html = '';

    if ( count( $posts_array ) > 0 ) {
      foreach ( $posts_array as $index => $post ) {
        // 個別記事の処理をここに記載する
      }
    }
    ob_end_clean();
    return $posts_html;
  }
  add_shortcode( 'get_posts', 'get_posts_func' );

  // 記事の本文を取得する
  function getPostContentFunc( $args ) {
    global $post;

    extract( $args );
    ob_start();

    $post_obj = get_post( $post_id );
    $post_html = $post_obj->post_content;

    ob_end_clean();
    return $post_html;
  }
  add_shortcode( 'getPostContent', 'getPostContentFunc' );
?>
