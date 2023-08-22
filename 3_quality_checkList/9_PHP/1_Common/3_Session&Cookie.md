# Session & Cookie

## Diff btw Session and Cookie

- Session
    - data is stored in `server`
    - data is stored permanently untill the user decides to discard it
    - Sessions cannot be accessed by hackers since it stores a user data on the server
    - Sessions contain a large amount of storage space(128MB) to store user data

- Cookie
    - data is stored in `client(browser)`
    - data is stored temporarily and dispose of it when the user refreshes or closes the browser
    - Cookies can easily be accessed by hackers since it stores user data in the browser
    - Cookies contain a minimal amount of storage space(4kb) to store user data

## Session

- `ini_set('session.cookie_secure', true)`
    - always `session.cookie_secure` must be `true`
        - with type `secure`, the cookie can be sent by https connection (not HTTP connection)
- On accessing to a page, PHP-Session is sent from server and stored in client(browser)'s `Cookies`, which can be seen in Network panel in devtool, as `PHPSESSID`
- temporary file in which Session information is written is created in server
- `session_start()`
  - if HTTP-Request-Header includes cookie `PHPSESSID`, restart the session (same session id)
  - if not, start new session (new session id)

### Code

``` php
<?php 
ini_set('session.cookie_secure', 1); // for HTTP connection

session_start();

$_SESSION['userName'] = 'nishina-takahiro';
print_r($_SESSION['userName']); // nishina-takahiro
```

### method

- `session_unset()`
    - remove all session variables
- `session_destroy()`
    - destroy the session
- `session_regenerate_id()`
    - change session id only

## Cookie

- `ini_set('session.cookie_secure', true)`
    - always `session.cookie_secure` must be `true`
        - with type `secure`, the cookie can be sent by https connection (not HTTP connection)
- In HTTP-Request-Header Cookies is defined in `Cookie` key while in HTTP Response-Header defined in `Set-Cookie` key
- personal information, such as userID, date of birth and so on, must not be sent by Cookie

### Code

``` php
<?php 
ini_set('session.cookie_secure', 1); 

$cookie_key = 'userName';
$cookie_value = 'nishina-takahiro';

/**
 * @example setcookie(string $name, string $value = '', int $expires_or_options = 0, string $path = '', string $domain = '', bool $secure = false, bool $httponly = false)
 * $expires_or_options = expiration
 * $path = directory range where cookie can be used
 * $domain = site domain
 * $secure = ini_set('session.cookie_secure', bool); 
 * $httponly = usable only by HTTP connection
 */
setcookie($cookie_key, $cookie_value, time() + (24 * 60 * 60), "/", $_SERVER['SERVER_NAME'], true, true); // (24 * 60 * 60) = 1 day
?>
```

or

``` php
<?php 
ini_set('session.cookie_secure', 1); 

$cookie_key = 'user';
$cookie_value = 'nishina-takahiro';
setcookie($cookie_key, $cookie_value, time() + ((24 * 60 * 60) * 30), '/',); // (24 * 60 * 60)  = 1 day
$cookieParams = session_get_cookie_params();
$cookieParams['secure'] = true; // activate type secure
?>
```

``` php
<?php
if(!isset($_COOKIE[$cookie_key])) {
  echo $_COOKIE[$cookie_key]; // Output: nishina-takahiro
}
?>
```

### How to delete

to reverse the expiry time to a past time

``` php
<?php 
setcookie('user', 'nishina-takahiro',  time() - 60);
?>
```