<?php
  show_admin_bar( false );

  // wp_head()が書き出すタグの一部削除
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'index_rel_link' );
  remove_action( 'wp_head', 'rel_canonical' );
  remove_action( 'wp_head', 'rest_output_link_wp_head' );
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
  remove_action( 'wp_head', 'wp_oembed_add_host_js' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // カスタムタクソノミーとカスタム投稿タイプの設定
  add_action('init', function() {
    // register_taxonomy('news-category', 'news', array(
    //   'labels' => array(
    //   	'name' => 'お知らせのカテゴリ',
    //   	'all_items' => 'お知らせのカテゴリ一覧',
    //   ),
    //   'hierarchical' => true,
    //   'rewrite' => array(
    //     'slug' => 'news',
    //   ),
    // ));
    // register_post_type('news', array(
    //   'labels' => array(
    //   	'name' => 'お知らせ',
    //   	'all_items' => '投稿一覧',
    //   ),
    //   'public'      => true,
    //   'has_archive' => true,
    //   'rewrite'     => array('slug' => 'news'),
    //   'menu_position'	 => 99,
    //   'supports'    => array('title', 'editor', 'excerpt'),
    // ));
  });

  // サムネイルサイズ変更
  add_theme_support('post-thumbnails');
  add_image_size('thumb-name', 700, 420, true);

  // サムネイルにsrcsetが自動付与されてしまうのを解除
  add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );

  // 固定ページに概要を追加
  add_post_type_support( 'page', 'excerpt' );

  // URLの末尾にスラッシュをつける。
  add_filter('user_trailingslashit', 'add_slash_uri_end', 10, 2);
  function add_slash_uri_end($uri, $type) {
    if ($type != 'single') {
      $uri = trailingslashit($uri);
    }
    return $uri;
  }
?>
