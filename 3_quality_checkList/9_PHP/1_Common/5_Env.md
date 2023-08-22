## Env

### Recomended Method

https://seiyaan.com/2019/06/phpdotenv/

### Other Method

to divide code in which environment it is executed

``` php
// detect an environment
if (isset($_SERVER['SERVER_NAME']))
{
    $host_name = $_SERVER['SERVER_NAME'];
}
elseif (isset($_SERVER['REMOTE_ADDR']))
{
    $host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
}

// define a constant
if (preg_match('/\.mitsue\.(co\.jp|com)$/', $host_name))
{
    define('ENVIRONMENT', 'dev');
}
elseif (preg_match('/\.hoge\.co\.jp$/', $host_name))
{
    define('ENVIRONMENT', 'stage');
}
else
{
    define('ENVIRONMENT', 'live');
}
```