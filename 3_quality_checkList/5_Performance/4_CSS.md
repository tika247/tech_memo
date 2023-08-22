# CSS

- Checking unused code exsistence 
- Minify
- Consider using `transfer` instead of `top` or `left` in animation
- Consider using `will-change` effectively in animation
- Checking setting Fallback-Font
    - e.g.
    ```
    @font-face {
      font-family: 'Noto Serif JP';
      src: local('Noto Serif CJK JP'), url('example.woff2') format('woff2');
      font-display: swap;
    }

    body {
      /* fallback */
      font-family: 'Noto Serif JP', serif;
    }
    ```
- Consider using `:where()` or `:is()` to put similar code together