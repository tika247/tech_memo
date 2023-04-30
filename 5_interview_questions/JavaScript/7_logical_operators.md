# Logical Operators

- OR ( || ) operator
    - If the first value is truthy, then the first value is returned. Otherwise, always the second value gets returned.

- AND ( && ) operator
    - If both the values are truthy, always the second value is returned. If the first value is falsy then the first value is returned or if the second value is falsy then the second value is returned.

```js
var x = 220;
var y = "Hello";
var z = undefined;

x || y    // Returns 220 since the first value is truthy

x || z   // Returns 220 since the first value is truthy

x && y    // Returns "Hello" since both the values are truthy

y && z   // Returns undefined since the second value is falsy
```