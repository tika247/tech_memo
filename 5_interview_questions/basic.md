## Difference between ' == ' and ' === ' operators

Both are comparison operators.
The difference between both the operators is that '==' is used to compare values whereas, ' === ' is used to compare both values and types.

## Is javascript a statically typed or a dynamically typed language?

JavaScript is `a dynamically typed language`. In a dynamically typed language, the type of a variable is checked during `run-time` in contrast to a statically typed language, where the type of a variable is checked during `compile-time`.

## What is NaN property in JavaScript?

NaN property represents the `Not-a-Number` value, so any string  values like '5' is NaN. It indicates a value that is not a legal number.
typeof of NaN will return a Number.
To check if a value is NaN, we use the isNaN() function

## Explain passed by value and passed by reference

In JavaScript, primitive data types are passed by value and non-primitive data types are passed by reference.

- In the background of `assing operator` dealing with primitive types

``` js 

var x = 2;

```

The '=' (assign operator) allocates some space in the memory, stores the value '2' and returns the location of the allocated memory space.
Therefore, the variable x in the above code points to the location of the memory space instead of pointing to the value 2 directly.

- In the background of `assing operator` dealing with non-primitive types

``` js 

var x = {
    y : 2
};
var z = x;

```

Whereas the example above, the '=' (assign operator) never allocate memory space, just `z` takes reference from `x`.

## null is Object!