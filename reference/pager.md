# ページャの実装

## テーマファイル側で予め用意しておく変数

WordPressではURLパラメータの`paged`の値が自動的に`$paged`変数に格納される。  
これを元にして現在の分割ページ位置を定義しておく。  
それと合わせて、ページ全件分の情報と、分割1ページあたりの表示件数も定義しておき、ページャ生成に利用する。

    $page_index = ( empty($paged) ) ? 1 : $paged;
    $posts_per_page = 15;
    $posts_array = get_posts( $args );

## ページャ呼び出しの汎用関数

`function.php`に以下を記載しておけば、テーマファイル内で`getPager()`を実行することでページャを呼び出せる。

    function getPager($posts_array, $posts_per_page, $page_index, $path) {
      if ( count($posts_array) > $posts_per_page ) :
        $peger_width = 1;
        $pager_count = floor( (count($posts_array) - 1) / $posts_per_page ) + 1;
        $center = max($peger_width + 1, min($pager_count - $peger_width, $page_index));
        $added_ellipsis_prev = false;
        $added_ellipsis_next = false;
        $html = '<div class="c-pager c-fade-in js-scroll-item">';

        if ( $page_index > 1 ) :
          $val = $page_index - 1;
          $html .= '<a class="c-pager__item c-pager__item--adjacent" href="'. $path. 'page/'. $val. '/">&lt;</a>';
        endif;
        for ( $i = 1; $i <= $pager_count; $i++ ) :
          if ( $i == $page_index ) :
            $html .= '<span class="c-pager__item c-pager__item--num is-current">'. {$i}. '</span>';
          elseif (
            ( $i >= $center - $peger_width && $i <= $center + $peger_width )
            || $i == 1 || $i == $pager_count
            ):
            $html .= '<a class="c-pager__item c-pager__item--num" href="{$path}page/{$i}/">'. {$i}. '</a>';
          elseif ( $added_ellipsis_prev === false && $i < $center + $peger_width ) :
            $html .= '<span class="c-pager__item c-pager__item--ellipsis">...</span>';
            $added_ellipsis_prev = true;
          elseif ( $added_ellipsis_next === false && $i > $center - $peger_width ) :
            $html .= '<span class="c-pager__item c-pager__item--ellipsis">...</span>';
            $added_ellipsis_next = true;
          endif;
        endfor;
        if ( $page_index < $pager_count ) :
          $val = $page_index + 1;
          $html .= '<a class="c-pager__item c-pager__item--adjacent" href="'. $path. 'page/'. $val. '/">&gt;</a>';
        endif;
        $html .= '</div>';
        return $html;
      endif;
    }
