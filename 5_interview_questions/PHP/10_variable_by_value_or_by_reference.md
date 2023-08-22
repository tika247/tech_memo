# variable_by_value_or_by_reference

To be able to pass a variable by reference, we use an ampersand in front of it

``` php
$var1 = &$var2
```

## call by value (値渡し)

if a value is assigned into a different variable, values of those variables are different

## call by reference (参照渡し)

if a value is assigned into a different variable, values are refered each other, e.g. one value changes the other value also change.

## default

- primitive
    - `call by value`
        - possible to change for `call by reference` with `&`
- array
    - `call by value`
        - possible to change for `call by reference` with `&`
- object
    - `call by reference`
        - possible to change for `call by value` with `clone`