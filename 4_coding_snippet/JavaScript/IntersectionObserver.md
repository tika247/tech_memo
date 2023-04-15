## resizeObserver.md

https://www.webcreatorbox.com/tech/intersection-observer

``` js
const target = null; // target element

const config = {
  root: null, // ターゲットとなる要素が見えるかどうかを判定するためのラッパー要素。nullの場合ViViewPort
  rootMargin: "0px", // 交差を検知するrootからの距離。正の数＝見える前。負の数＝見えた後
  threshold: 0.9, // 関数を実行する交差の割合 例）0.9 = 9割交差したとき
};
const intersectionObserver = new IntersectionObserver((entry) => {
  if (entry[0].intersectionRatio <= 0.9) {
    console.log("do something");
  } else {
    console.log("do something");
  }
}, config);

// 監視を開始
intersectionObserver.observe(target);
```