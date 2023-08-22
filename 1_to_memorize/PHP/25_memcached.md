## Memcached

- a distributed memory caching system that is used to speed up dynamic web applications by alleviating database load
- highly-performance, generic, and distributed memory object caching system that works with libMemcached

デフォルトではセッション情報やDB値の管理はファイルベース（`php.ini`に`session.save_handler = files`）だが、
memcachedベース（（`php.ini`に`session.save_handler = memcached`））に変更できる

### Memo

導入が少し手間。大規模サイトで使うべきかも

### Usage

https://www.php.net/manual/ja/memcache.examples-overview.php
https://www.t3a.jp/blog/infrastructure/php-session-memcached/#outline__1