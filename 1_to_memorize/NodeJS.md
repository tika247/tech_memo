## set request URL by `/.*/` so that , for example, make it possible to access a pase even if user mistype URL

``` js

app.get(/.*/, (req, res) => res.sendFile(__dirname + '/public/index.html'));

```

## To secure API from a security perspective

https://nerdleveltech.com/a-full-guide-understand-everything-about-apis-with-examples/
※below `1- Use HTTPS`

## 