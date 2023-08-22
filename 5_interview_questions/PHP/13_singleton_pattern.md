## Singleton Pattern

- Singleton is one of PHP design-patterns
- In this pattern, instance is allways single
- constructor is private to privent to be instanciate from outside

```php
class Singleton
{
    private static $singleton;

    private function __construct()
    {
        echo "インスタンスを生成しました。" . PHP_EOL;
    }

    public static function getInstance()
    {
        if (!isset(self::$singleton)) {
            self::$singleton = new Singleton();    
        }

        return self::$singleton;
    }
}
```

```php
$singleton1 = Singleton::getInstance();
```