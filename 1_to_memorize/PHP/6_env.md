# ENV

## environmental variables

An environment variable is a variable whose value is set outside the program, typically through functionality built into the operating system or microservice.
An environment variable is made up of a name/value pair, and any number may be created and available for reference at a point in time.

https://webukatu.com/wordpress/blog/29415/

## check ENV in PHP

`phpinfo()` shows information of an active PHP and Env information is in Environment section

## $_ENV["name"]

a super global to get ENV information

* must activate $_ENV in `php.ini`

## putenv()

set a new ENV variable locally which exsists only a current request being executed (as the request ends, the ENV variable is removed)

``` php
putenv("UNIQID=$uniqid");
```

## getenv()

```php
getenv ( string $varname , bool $local_only = false ) : string
```

* $local_only = to get ENV set locally

```php
getenv ( ) : array
```

## use .env file

environmental variables used for in PHP

1. Must Use `composer` or `Laravel`

* cannot use .env with default PHP

2. create .env file

``` php
# commentout is possible in .env
MYNAME="Taka"
```

``` php
# commentout is possible in .env
MYNAME="Taka"
```

3. get values from .env

```php
echo $_ENV["MYNAME"]; // return "Taka"
```