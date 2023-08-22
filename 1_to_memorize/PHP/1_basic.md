# Basic

## $_SERVER

``` php
<?php
$_SERVER["DOCUMENT_ROOT"] // return document root
$_SERVER["REQUEST_METHOD"] === "POST" // return method, ex GET or POST
?>
```

## include, require

- include
- include_once
- require
- require_once

- include() statement will only generate a PHP warning but allow script execution to continue if the file to be included can't be found
- require() statement will generate a fatal error and stops the script execution

- _once
    - executed only first time and ignored from second

## boolean

``` php
$a = 2; 
$b = $a > 0; 

echo $b;
```

- if true
    - 1 is shown in browser.
- if false
    - nothing in browser.

## exit and return

- exit
    - stop forcibly so following codes will be never read
- return
    - stop in a scope. ex if return is used in a function, the following codes in the function will not be read but codes followed by that function will be read

## to add a new value into array instead of using `array_push()`

```php
$fruit = ["Apple", "Banana", "Cherry"];
$fruit[] = "orange";  

echo $fruit[3] // return
```

## case sensitive

PHP is partially case sensitive

- variable
    - case sensitive
- function
    - not case sensitive
        - if you define the function name in lowercase and call them in uppercase, it will still work

## Cookie & Session

https://zenn.dev/masahiro_toba/books/3daf7dc0d5dfd7/viewer/66f9d4