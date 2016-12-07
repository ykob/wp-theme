# 各種一覧の取得

## カテゴリー一覧

`get_categories` を使う。

[関数リファレンス/get categories - WordPress Codex 日本語版](https://wpdocs.osdn.jp/関数リファレンス/get_categories)

    <?php
      $args = array(
      	'type' => 'post',
      	'orderby' => 'name',
      	'order' => 'ASC',
      	'hide_empty' => 1,
      	'hierarchical' => 1,
      	'taxonomy' => 'category'
      );
      $categories = get_categories( $args );
      foreach ( $categories as $category ) {
        echo '<a href="'. get_category_link( $category->term_id ). '">'. $category->name. '</a>';
      }
    ?>

## タグ一覧

`get_tags` を使う。

[関数リファレンス/get tags - WordPress Codex 日本語版](https://wpdocs.osdn.jp/関数リファレンス/get_tags)

    <?php
      $args = array(
        'orderby' => 'count',
        'order' => 'ASC',
        'hide_empty' => 1,
      );
      $tags = get_tags( $args );
      foreach ( $tags as $tag ) {
        echo '<a href="'. get_tag_link( $tag->term_id ). '">'. $tag->name. '</a>';
      }
    ?>
