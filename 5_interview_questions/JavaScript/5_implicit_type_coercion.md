## implicit type coercion（型強制）

`Type coercion` is the automatic or implicit conversion of values from one data type to another (such as strings to numbers). 
`Type conversion` is similar to `type coercion` because they both convert values from one data type to another with one key difference — `type coercion` is implicit whereas `type conversion` can be either implicit or explicit.

``` js

var x = 3;
var y = '3';
x + y // Returns '33'

```

* `y` is forcibly converted to `string` and becomes '33' as a result