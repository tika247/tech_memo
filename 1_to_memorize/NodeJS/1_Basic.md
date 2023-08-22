# Node.js

Node.js is based on an event-driven architecture where I/O runs asynchronously making it lightweight and efficient

## Merit

- データ処理能力を高め、C10K問題に対応できる
    - C10K問題
        - 接続数が1万を超えると、ネットワークの処理能力が低下してしまう現象
- ノンブロッキング I/Oによる非同期処理
    - ノンブロッキング I/Oによる非同期処理を行える。タスクが終わっていない状態でも、次のタスクを進められるため情報の処理がスムーズになる
- クライアントサイドとサーバーサイドで言語が統一できる

## デメリット

- 対応しているサーバーが少ない
- 大規模開発に向かない
    - Node.jsはシングルスレッドのため、タスクが集中しすぎると動作遅くなる、もしくはサーバーダウンする

## set request URL by `/.*/` so that , for example, make it possible to access a pase even if user mistype URL

``` js

app.get(/.*/, (req, res) => res.sendFile(__dirname + '/public/index.html'));

```