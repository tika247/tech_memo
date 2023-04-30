# Class

## differences of Class Modifier

- public, private, protected
    - https://uxmilk.jp/26435
- static method
    - possible to access to class-method without an instanciation

``` php
class Person {
    private $name;
    private $age;

    public static $drinkableAge = 21;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public static getDrinkableAge() {
        return self::$drinkableAge; // to access to static propertis or method, use self:: instead of $this
    }
}

echo Person::$drinkableAge; // return 21
echo Person::$getDrinkableAge(); // return 21
```

## ::parent

to access to properties and methods of the parent class 