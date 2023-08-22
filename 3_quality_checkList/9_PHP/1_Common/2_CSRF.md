# CSRF (Cross Site Request forgery)

## About

Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they're currently authenticated. 
With a little help of social engineering (such as sending a link via email or chat), an attacker may trick the users of a web application into executing actions of the attacker's choosing. 
If the victim is a normal user, a successful CSRF attack can force the user to perform state changing requests like transferring funds, changing their email address, and so forth. 
If the victim is an administrative account, CSRF can compromise the entire web application.

## Flow

1. before a form page is shown

``` php
// create a random string and set it into session
$csrf_token = ランダムな文字列;
$_SESSION['csrf_token'] = $csrf_token;
```

2. set the token in input tag with hidden type

```html
<form method="POST" action="http://hoge.com/confirm.php">
    <input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
    <input type="text" name="">
    <input type="text" name="">
    <input type="submit>
</form>
```

3. check if posted token and session-stored token is same

``` php
// in confirm.php
if (isset($_POST["csrf_token"]) 
 && $_POST["csrf_token"] === $_SESSION['csrf_token']) {
    // true
} else {
    // false
}
```

## Note

- CSRF can be taken measures by server setting too
