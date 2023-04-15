## resizeObserver.md

``` js
const target = null; // target element

const resizeObserver = new ResizeObserver((entry) => {
  if (entry[0].contentRect.width <= 768) {
      console.log("do somothing");
  } else {
      console.log("do somothing");
  }
});

// 監視を開始
resizeObserver.observe(target);
```