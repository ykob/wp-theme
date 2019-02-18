# その他覚書

- カスタム投稿タイプの定義において、 `hierarchical` を `true` にすると固定ページ扱いになる。特定のカテゴリのページのグルーピングをすべて標準の固定ページでやるのではなく、カスタム投稿タイプでやればよりきれいに整理ができる。

## Advanced Custom Fields

- 名前が同じカスタムフィールドをOptions Pageで表示させると値が同期してしまって、別々のOptions Pageで固有の値をもたせることができない。これを避けるには元のカスタムフィールドを複製し、名前を変更する必要がある。
- 繰り返しコンテンツに定義するレイアウトのフィールドでほかの繰り返しコンテンツをCloneすると、複数の繰り返しコンテンツをマージできる。
- カスタムフィールドのフィールドグループはテーマファイルの種類ごとに作成しておいたほうが無難。
  - ACFのUIの都合上、フィールドグループの整列は困難だが、各フィールドの整理は容易。
  - 共通のフィールドグループ自体に表示条件を設定してしまうと、変更が入ったときの整理が複雑になる。