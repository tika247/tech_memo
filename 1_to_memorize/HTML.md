## enctype="multipart/form-data"

`enctype="multipart/form-data"` is required as a `form` tag's type when sending some files to server.
*when POST method

``` html

<form action="/hogehoge/" methods="POST" enctype="multipart/form-data">
<input type="file">
<button type="submit">
</form>

```

## og設定

https://www.profuture.co.jp/mk/column/14269

``` html 

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta property="og:type" content="ページの種類">
<meta property="og:url" content="ページのURL">
<meta property="og:image" content="ページの画像URL">
<meta property="og:title" content="ページのタイトル">
<meta property="og:description" content="ページの説明">
<meta property="og:locale" content="言語の指定">

```

## aria-current="page"

ナビの現在位置にはaria-current="page"を使う

## mark

To hightlight important text

```

<p>The Math test is on <mark>Friday</mark>.</p>

```