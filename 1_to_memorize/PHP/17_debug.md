# Debug

1. show Error Text if Error is thrown

```php
error_reporting(E_ALL & ~ E_DEPRECATED);
ini_set('display_errors', "On");
```