# ??

in comparison to `||`, `||` just detect `null` (not detect `0`, `false`, `""` and so on)

``` js

let grade = 0;
alert(grade || 100); // Output: 100
alert(grade ?? 100); // Output: 0

```
