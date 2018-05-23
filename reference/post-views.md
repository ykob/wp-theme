# PostViewsプラグインの使い方

記事のview数を表示したり、記事一覧をview数順で表示することができるようになるプラグイン。  
https://wordpress.org/plugins/wp-postviews/faq/

## view数の出力

プラグイン独自のview数呼び出しの関数`the_views()`は、第一引数に`false`を指定すると`html`は`echo`されず値だけを取得することができる。

    <?php
      $view = ( function_exists( 'the_views' ) ) ? the_views( false ) : null;
    ?>

## view数順の記事一覧の出力

### get_postsを使った方法

ウィジェット機能に依存したくないので、get_postsを使う。

    <?php
      $args = array(
        'posts_per_page' => 5,
        'meta_key' => 'views',
        'orderby' => 'meta_value_num',
      );
      $posts_array = get_posts( $args );
      foreach ( $posts_array as $post ) :
        setup_postdata( $post );
        $permalink = get_permalink();
        $title = get_the_title();
        $view = get_post_meta( $post->ID, 'views', true );
    ?>

    <?php
      endforeach;
      wp_reset_postdata();
    ?>
