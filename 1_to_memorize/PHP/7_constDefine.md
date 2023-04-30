# const & define

to define a constant value (never be changed)

- define()
    - able to use an other variable or a returned value of a function
    - not able to use to define as a property or method in Class syntax
    - registed in global

``` php
define('MY_CONST_1', 'defineで定義した定数');
```

- const
    - not able to use an other variable or a returned value of a function
    - not able to use inside `if` or `for`
    - registed in namespace

``` php
const MY_CONST_2 = 'constで定義した定数';
```