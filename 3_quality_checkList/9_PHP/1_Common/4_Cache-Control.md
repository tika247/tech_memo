# Cache-Control

## if **a client PC and origin-server is 1-on-1** and **personal information is never used**, allow a browser to cache.

※cannot be used for CDN because it is not 1-on-1

```
Cache-Control：private
```

## if **personal information is used** or **just in case to prevent from a vicious attacking**, restrict a browser to cache.
```
Cache-Control：no-store
```