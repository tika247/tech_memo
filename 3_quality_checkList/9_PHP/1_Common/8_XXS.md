# XSS

- use `htmlspecialchars()` to escape special charactors
- allow only `http://` `https://` of URL if app has manipulation of URL
    - not allow `javascript:` of URL
- set `charset` in `Content-Type field` of `HTTP response header`