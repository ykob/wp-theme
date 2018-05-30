<?php
  // 汎用関数

  // 10000以上の数を指定すると1000未満を省略して返す。
  function omit_number( $num ) {
    $int_num = intval( str_replace( ',', '', $num) ) ;
    if ( $int_num >= 10000 ) {
      return floor( $int_num / 1000 ). 'k';
    } else {
      return $num;
    }
  }

  // 該当の記事が何番目なのかを返す。
  function get_post_number( $post_type = 'post', $op = '<=' ) {
    global $wpdb, $post;
    $post_type = is_array( $post_type ) ? implode( "', '", $post_type ) : $post_type;
    $number = $wpdb->get_var( "
      SELECT COUNT( * )
      FROM $wpdb->posts
      WHERE post_date {$op} '{$post->post_date}'
      AND post_status = 'publish'
      AND post_type = ('{$post_type}')
    " );
    return $number;
  }
?>
