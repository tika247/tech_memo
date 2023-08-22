# HTML

- Consider setting Resource-Hints
    - `rel=preconnect`
    - `rel=dns-prefetch`
    - `rel=prefetch`
        - `<link rel="prefetch" href="〇〇〇" as="">` if the page that user is supporsed to transfer next is highly expected, such as in form or login page
    - `rel=preload`
        - `<link rel="preload" as="image" href="mv.png">`for big-size images such as mv
- Consider setting `loading=lazy` attribute for images
- Consider setting `width` and `height` attribute for images to deal with CLS
- Consider setting `fetchPriority` attribute for `img`, `link` or `script` from priority perspective