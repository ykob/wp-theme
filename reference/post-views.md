# PostViewsプラグインの使い方

記事のview数を表示したり、記事一覧をview数順で表示することができるようになるプラグイン。  
https://wordpress.org/plugins/wp-postviews/faq/

## view数の出力

    <?php if ( function_exists( 'the_views' ) ): ?>
      <p>
        <?php the_views(); ?>
      </p>
    <?php endif; ?>

## view数順の記事一覧の出力

### 下位n件

    <?php if ( function_exists( 'get_least_viewed' ) ): ?>
      <ul>
        <?php get_least_viewed(); ?>
      </ul>
    <?php endif; ?>

### 上位n件

    <?php if ( function_exists( 'get_most_viewed' ) ): ?>
      <ul>
        <?php get_most_viewed(); ?>
      </ul>
    <?php endif; ?>
