# 固定ページに関する処理

## 親ページの情報を取得

グローバル変数 `$post` を定義したうえで、それが持つ `post_parent` プロパティを引数にして `get_post()` を使用する。

    global $post;

    if ( $post->post_parent ) {
      $post_parent_data = get_post( $post->post_parent );
      $slug_parent = $post_parent_data->post_name;
    }
