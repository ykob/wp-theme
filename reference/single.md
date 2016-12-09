# 投稿記事に関する処理

## 記事本文を取得する

`get_the_content` では取得できないことがある。`get_post` を使う。

[関数リファレンス/get post - WordPress Codex 日本語版](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_post)

    <?php
      $current_id = get_the_ID();
      $post = get_post( $current_id );
      $content = $post->post_content;
      echo $content;
    ?>

## アイキャッチのsrc値を取得する

`wp_get_attachment_image_src` を使う。

[関数リファレンス/wp get attachment image src - WordPress Codex 日本語版](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/wp_get_attachment_image_src)

    <?php
      $kv_array = wp_get_attachment_image_src( get_post_thumbnail_id(), true );
      $kv = $kv_array[0];
    ?>

## 隣接する記事のリンクを表示する

    <?php
      $adjacent_prev = get_adjacent_post( false, '', true );
      $adjacent_next = get_adjacent_post( false, '', false );
      if ( !empty( $adjacent_prev ) || !empty( $adjacent_next ) ) :
    ?>
      <ul>
      <?php
        if ( !empty( $adjacent_prev ) ) :
      ?>
        <li>
          <a href="<?php echo get_permalink( $adjacent_prev ); ?>">
            <?php echo get_the_title( $adjacent_prev ); ?>
          </a>
        </li>
        <?php
          endif;
          if ( !empty( $adjacent_next ) ) :
        ?>
        <li>
          <a href="<?php echo get_permalink( $adjacent_next ); ?>">
            <?php echo get_the_title( $adjacent_next ); ?>
          </a>
        </li>
      <?php
        endif;
      ?>
      </ul>
    <?php
      endif;
    ?>

## カテゴリ・タグを元にした関連記事一覧をランダムに表示する

    <?php
      $terms_id = array();
      foreach( $terms as $term ) array_push( $terms_id, $term->term_id );
      $tags_id = array();
      foreach( $tags as $tag ) array_push( $tags_id, $tag->term_id );
      $related_args = array(
        'posts_per_page' => 4,
        'category__in' => $terms_id,
        'tag__in' => $tags_id,
        'orderby' => 'rand',
      );
      $related_posts_array = get_posts( $related_args );
      foreach ( $related_posts_array as $related_post ) :
        $related_id = $related_post->ID;
        $related_permalink = get_permalink($related_id);
        $related_title = get_the_title($related_id);
        $related_terms = get_the_terms($related_id, 'category');
    ?>
      <a href="<?php echo $related_permalink; ?>">
        <?php echo $related_title; ?>
      </a>
    <?php
      endforeach;
    ?>
