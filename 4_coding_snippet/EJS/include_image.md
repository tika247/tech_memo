## include image

``` ejs

<div class="top_mv">
<%- include('/image', {
    path: '/assets/img/top/',
    name: 'top_mv.webp',
    alt: '',
    width: '',
    height: '',
    loading: '',
    classAttr: 'top_mv__img'
}) %>
</div><!-- /.top_mv -->

```

codes above is to get and set `<img>` by including below

``` ejs

<%# img要素の出力
    path: {String}, // 画像へのパス ex) 'directory/'
    name: {String}, // 画像のファイル名 ex) '1046x400.gif'
    alt: {String}, // alt属性値 ex) ''
    width: {String}, // ''を指定したら自動的に画像ファイルの幅を取得
    height: {String}, // ''を指定したら自動的に画像ファイルの高さを取得
    loading: {String} // 'lazy' or 'eager' or ''
    classAttr: {String}, // class属性値 ex)'hoge fuga'
%>
<%
if (width === '' || height === '') {
    const dimension = imageElementSet(path + name);
    width = width !== '' ? width : dimension.width;
    height = height !== '' ? height : dimension.height;
}
-%>
<img src="<%= path %><%= name %>" alt="<%= alt %>" width="<%= width %>" height="<%= height %>"<% // 改行を消す -%>
<% if (loading) { %> loading="<%= loading %>"<% } -%>
<% if (classAttr) { %> class="<%= classAttr %>"<% } -%>
>

```