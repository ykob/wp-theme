# 記事一覧の取得

`get_posts` を使う。  
[テンプレートタグ/get posts - WordPress Codex 日本語版](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/get_posts)

    <?php
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'schedule', // カスタム投稿タイプの場合は指定
      );
      $posts_array = get_posts( $args );
      foreach ( $posts_array as $post ) :
        setup_postdata( $post );
        $title = get_the_title();
        $date = get_the_date();
        $terms = get_the_terms(get_the_ID(), 'category or taxonomy-slug');
        $tags = get_the_tags();
        $excerpt = get_the_excerpt();
        $content = get_the_content();
        $cf = SCF::gets(); // カスタムフィールドを持つ場合は指定
    ?>

    <?php
      // カテゴリー一覧を表示
      foreach ( $terms as $term ) {
        echo '<a href="'. get_term_link( $term->term_id ). '">'. $term->name. '</a>';
      }

      // タグ一覧を表示
      foreach ( $tags as $tag ) {
        echo '<a href="'. get_tag_link( $tag->term_id ). '">'. $tag->name. '</a>';
      }

      // サムネイルを表示
      the_post_thumbnail('thumb-name');

      // カスタムフィールドの値を表示
      echo $cf['field_name'];
    ?>

    <?php
      endforeach;
      wp_reset_postdata();
    ?>
