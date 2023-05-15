# pre-attributes

https://webwork-plus.com/content/website/pre-speedup.html

## preload

- designate files as high-priority-loaded-file
    - use for big-size FV or font
- https://wk-partners.co.jp/homepage/blog/hpseisaku/htmlcss/preload/

## prefetch

- load files of a page that highly likely to be transfered next

## prerender

- load files and secretly show the page that highly likely to be transfered next
    - the page secretly shown so on transfering, immidiately shown

## preconnect

- hint to browsers that the user is likely to need resources from the target resource's origin, and therefore the browser can likely improve the user experience by preemptively initiating a connection to that origin.
    - `クライアントとサーバーの間のDNS解決`
    - `TCPのハンドシェイク開始`
    - `TLSトンネルのネゴシエーション`
- https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel/preconnect

## dns-prefetch

- like preconnect but only for `クライアントとサーバーの間のDNS解決`