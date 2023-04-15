## Explain Hoisting in javascript

- Hoisting is the default behaviour of javascript where all the variable and function declarations are moved on top.
    - By this default JS functionality, variable declarations lines comes top. But 

* hoisting only apply for variable declarations. Never apply for when variables initialization
* To avoid hoisting, you can run javascript in strict mode by using “use strict” on top of the code
    * because Hoisting makes bad influence on Web Performance?

``` js

console.log(num); // undefined を返す。宣言のみが巻き上げられ、この段階では初期化が行われないため

var num; // 宣言
num = 6; // 初期化

x = 1; // Hoisting for `x` never happens because `var, let, const` don't exsist in this sentence(which means variables declarations is necessary for Hoisting).

```

## Reference

[https://zenn.dev/oreo2990/articles/283437e3bc9f7d](https://zenn.dev/oreo2990/articles/283437e3bc9f7d)