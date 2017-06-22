# 検索機能の実装

## テーマファイル

`search.php` もしくは `search-[posttype].pug` で実装する。
検索結果の記事一覧の取得には`query_posts()`を使う。  
引数のオブジェクトには、検索クエリのパラメータ`$wp_query->query`を、他の記事取得用プロパティの配列と`array_merge()`する。

    $args = array_merge( $wp_query->query, array(
      'posts_per_page' => -1,
      'post_type' => 'posttype',
    ));
    $posts_array = query_posts( $args );


## 検索フォーム

検索フォーム自体は以下のように書けば実装できる。  
投稿タイプを指定する場合は`input[name=post_type]`を追加する。

    <form role="search" method="get" action="/">
      <input type="text" name="s">
      <input type="hidden" name="post_type" value="slug">
      <input type="submit" value="検索する">
    </form>
