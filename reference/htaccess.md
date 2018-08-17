# よく使うhtaccessの記述

    # 静的ファイル確認時に.phpよりも.htmlを優先する
    DirectoryIndex index.html index.php

    # Basic認証
    AuthUserFile /path/.htpasswd
    AuthGroupFile /dev/null
    AuthName "Input your ID and Password."
    AuthType Basic
    require valid-user

    # httpをhttpsに、www無をwww有にリダイレクトする
    <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://www.xxx.com/$1 [R=301,L]
    RewriteCond %{HTTPS_HOST} ^xxx\.com$
    RewriteRule ^(.*)$ https://www.xxx.com/$1 [R=301,L]
    </IfModule>
