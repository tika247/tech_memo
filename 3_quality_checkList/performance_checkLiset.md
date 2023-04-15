## mvなど少し重い画像は`<link rel="preload" as="image" href="mv.png">`を検討

## formやログインページなど、次に遷移するページがほぼ決まっている場合、`<link rel="prefetch" href="〇〇〇" as="">` を検討
https://blog.members.co.jp/article/33474

## Resource Hintsを考慮

https://blog.members.co.jp/article/33474

## 遅延読み込み必要なimg要素, img要素に `loading=lazy` を設置

FVから1250px以上離れている必要ある？

## フォントは非同期で読み込む

## CLS対策として、画像にwidth, height属性を設定