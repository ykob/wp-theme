# 投稿ページ単体

## 記事本文を取得する

`get_the_content` では取得できないことがある。`get_post` を使う。

[関数リファレンス/get post - WordPress Codex 日本語版](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_post)

    $current_id = get_the_ID();
    $post = get_post( $current_id );
    $content = $post->post_content;

## アイキャッチのsrc値を取得する

`wp_get_attachment_image_src` を使う。

[関数リファレンス/wp get attachment image src - WordPress Codex 日本語版](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/wp_get_attachment_image_src)

    $kv_array = wp_get_attachment_image_src(get_post_thumbnail_id(), true);
    $kv = $kv_array[0];
