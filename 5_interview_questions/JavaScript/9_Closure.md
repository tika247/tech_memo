# Closures

- lexical variable
- scope
    - global scope
    - local scope
    - block scope
    - scope chain
- lexical scope & dynamic scope
    - https://wemo.tech/904

https://wemo.tech/904

- Point！
    - `つまり、呼び出し元の関数Bで新たにxが定義されていようとも、関数Aが定義された時点で参照していたxが出力されます`
    - `もう一度myFunc();を呼び出してあげると、コンソールの出力はなく、アラートで"ほげ"と出てくるのみです。（実際にコードを動かすとよくわかります）`


--- 

■ケース①
``` js
    function fnA() {
        var hoge = "ほげ";　// A
        console.log(hoge);
      }

      var myFunc = fnA();

      myFunc(); // 1

// 1を実行する→Aがコンソールに出力される→「Uncaught TypeError: myFunc is not a function」でエラーになる
```

■ケース②
``` js
    function fnA() {
        var hoge = "ほげ"; // A
        console.log(hoge);

        function fnB() { // ←クロージャ ※lexical scope＝宣言時に参照する変数が決まるためAは参照対象になっている
          alert(hoge);
        }
        return fnB;
      }

      var myFunc = fnA();

      myFunc(); // 1
      setTimeout(() => {
          myFunc(); // 2
      }, 2000);

// 1を実行する→Aがコンソールに出力される→Aがアラート表示される
// 2を実行する→→Aがアラート表示される ※コンソールには出力されない＝fnAでreturnされているのはfnBのみのため
```