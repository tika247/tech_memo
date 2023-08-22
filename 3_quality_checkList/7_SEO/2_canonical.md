# canonical

to tell search engines that certain similar URLs are actually the samesearch engines that certain similar URLs are actually the same

``` html
<link rel="canonical" href="https://example.com/hogehoge/fugafuga.html" />
```

- place `link[rel="canonical"]` inside of `<head></head>`
- URL set in `link` tag must be absolute path
- URL must be % encoding if it has Japanese letters
- `link[rel="canonical"]` must be unique in a page

* possible to manipulate by htaccess as a method behalf of by canonical

## ref

https://www.gyro-n.com/seo/hack/canonical/