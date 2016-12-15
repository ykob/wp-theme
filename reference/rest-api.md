# WP REST API の使い方

[WP REST API](http://ja.wp-api.org/)を使用すれば、Ajaxを使ってWordPressの中身を取得することができる。

## 記事一覧の出力

    export default class NewsPosts {
      constructor($wrap) {
        this.$wrap = $('.c-news-posts');
        this.rest = 'http://xxx.com/wp-json/wp/v2/posts?_embed&per_page=3';
      }
      ajax(callback) {
        $.ajax({
          url: this.rest,
          type: 'GET',
          dataType: 'json',
        })
        .done((data) => {
          this.createHtml(data);
        })
        .fail(() => {
          this.createErrorMessage();
        })
        .always(() => {
          if (callback) callback();
        });
      }
      createHtml(data) {
        let html = '';
        for (var i = 0; i < data.length; i++) {
          const post = data[i];
          const permalink = post.link;
          const title = post.title.rendered;
          const excerpt = post.excerpt.rendered.replace(/<("[^"]*"|'[^']*'|[^'">])*>/g,'');
          const thumbnailSrc = post._embedded['wp:featuredmedia'][0].media_details.sizes.thumbnail.source_url;
          const term = post._embedded['wp:term'][0][0].name;

          html += `<div class="c-news-posts__item">
            <a class="c-news-posts__item-wrap" href="${permalink}">
              <img src="${thumbnailSrc}" alt="" class="c-news-posts__item-image">
              <div class="c-news-posts__item-category">${term}</div>
              <h2 class="c-news-posts__item-title">${title}</h2>
              <p class="c-news-posts__item-excerpt">${excerpt.substr(0, 60) + ((excerpt.length > 60) ? '...' : '')}</p>
            </a>
          </div>`
        }
        this.$wrap.html(html);
      }
      createErrorMessage() {
        this.$wrap.html(`<p class="c-news-posts__error">最新のニュースの取得に失敗しました。ページをリロードしてください。</p>`);
      }
    }
