# Suber Global Variables

variables which can be accessed from everywhere in PHP (PHP offers those)

```php
$_SERVER["DOCUMENT_ROOT"];
$_SERVER["SCRIPT_NAME"];  // path to a current .php file.
$_SERVER["PHP_SELF"]; // path to a current .php file. *This is vulnerable for XSS so use
$_SERVER["SERVER_NAME"];
$_SERVER["REQUEST_METHOD"];
```

```php
$_GET["name"];
$_POST["name"];
$_REQUEST["name"]; //get a value without which method it is, $_GET, $_POST and even $_COOKIE. not recommended for security aspect.
```

```php
$_FILES["name"]; //get data uploaded with HTML input[type=file] by specifing the same name.
$_COOKIE["name"];
$_SESSION["name"]; // similar to JS-sessionStorage(). able to set `$_SESSION["username"] = "Taka";`
```

```php
$_ENV["name"]; // get values from .env
```