# JS checkList

after code JS, check below and refine codes better

## 意図的にオブジェクトの値が存在しないことを表す変数に、`null` を設置

## forEachの削減

- NodeListでArray用のmethodsを使いたい時

``` js
Array.from(toggleContent).some((content) => content.classList.contains(this.showClass));
```

## `querySelectorAll` などでNodeListを取得するとき、狭い参照範囲で記述できているか

## `addListener` によるレスポンシブ対応

```js
const mq = [
    win.matchMedia('(min-width: 821px)'),
    win.matchMedia('(min-width: 1024px)'),
    win.matchMedia('(min-width: 1281px)')
]

mq[0].addListener(() => {
    this.switching();
});
```

## shorten IF

- Nullish Coalescing Operator

if hoge is null or undefined, right value will be assigned.

``` js
let hoge = null;
let foo = hoge ?? 1;
console.log(foo); // 1
```

codes belw also possible

``` js
let hoge = null;
hoge ??= 1
console.log(hoge); // 1
```

- OR operator

if hoge is falsy, right value will be assigned.

``` js
let hoge = 0;
let foo = hoge || 1;
console.log(hoge); // 1
```

codes belw also possible

``` js
let hoge = 0;
hoge ||= 1
console.log(hoge); // 1
```

- multiple if

``` js
//longhand
if (x === 'abc' || x === 'def' || x === 'ghi' || x ==='jkl') {
   //logic
}

//shorthand
if (['abc', 'def', 'ghi', 'jkl'].includes(x)) {
   //logic
}
```

## 10進数ベース指数

``` js
// Longhand
for (var i = 0; i < 10000; i++) { ... }

// Shorthand
for (var i = 0; i < 1e4; i++) {
```
 
## スプレッド演算子

``` js
//longhand
// joining arrays using concat
const data = [1, 2, 3];
const test = [4 ,5 , 6].concat(data);

//shorthand
// joining arrays
const data = [1, 2, 3];
const test = [4 ,5 , 6, ...data];
console.log(test); // [ 4, 5, 6, 1, 2, 3]
```

## Object.values()

``` js
const data = { test1: 'abc', test2: 'cde' };
const arr = Object.values(data);
console.log(arr);

/** Output:
[ 'abc', 'cde']
**/
```

※keyを含めたい場合、`Object.entries()`

## Web Components

`template` 要素、`Document.fragment` を正しく使用する

## Optional chaining '?.'

obj?.prop → returns obj.prop if obj exists, otherwise undefined.
obj?.[prop] → returns obj[prop] if obj exists, otherwise undefined.
obj.method?.() → calls obj.method() if obj.method exists, otherwise returns undefined.