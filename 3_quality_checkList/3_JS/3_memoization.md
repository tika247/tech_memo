# Memoization

speed up rendering  by caching values and checking their existence

https://nju33.com/notes/javascript/articles/%E9%96%A2%E6%95%B0%E3%81%AE%E3%83%A1%E3%83%A2%E5%8C%96#%E9%96%A2%E6%95%B0%E3%81%AE%E3%83%A1%E3%83%A2%E5%8C%96

``` js
const memo = new Map();
const foo = num ⇒ {
  if (memo.has(num)) {
    return memo.get(num);
  }

  const result = process(); // 重い処理...

  memo.set(num, result);
  return result;
};
```

## Merit

by memoization, rendering speed would be a quarter of original codes

## Demerit

take costs of additional coding (readability get worse)

## Conclusion

if a feedback time from when user action (e.g. click, change) occures takes over 100ms, memoization should be implemented.

- over 100ms
    - memoization should be implemented
- over 50ms
    - memoization is preferable to be implemented
* [ref](https://developer.mozilla.org/en-US/docs/Web/Performance/How_long_is_too_long)