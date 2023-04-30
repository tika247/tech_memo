# Fibonacci sequence

https://ja.javascript.info/task/fibonacci-numbers

```js
function fib(n) {
  let a = 1;
  let b = 1;
  for (let i = 3; i <= n; i++) { // nが2以下の処理がコールされないようにする
    let c = a + b;
    a = b;
    b = c;
  }
  return b; // 次の数字は前の2つの数字の合計 → それらの数字の合計値を返す
}

alert( fib(3) ); // 2
alert( fib(7) ); // 13
alert( fib(77) ); // 5527939700884757
```