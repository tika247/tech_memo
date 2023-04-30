# try catch

``` php
$person = new Person();

try {
    $person->setName("Taka");
    echo $person->getName();
} catch (TypeError $e) {
    echo "Error: {$e->getMessage()}";
}
```