# SECURITY

## disable HTML or JS for data sent from client-side

```php
$sanitized = htmlspecialchars($data);
```

## session hijacking prevention

- premise
    - session id is administrated by Cookies
- solution (not exsist solid solution)
    - change a session-id-name by changing php.ini line 
    - create an unpredictable and complicated session-id-name by changing php.ini line
    - put `secure` attribute into Cookies if HTTPS 
    - change a session-id-name by every access
        - `session_regenerate_id(true);`

https://amg-solution.jp/blog/7651#toc___2