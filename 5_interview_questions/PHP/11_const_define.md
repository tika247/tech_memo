# diff bw const and define()

- const
    - is defined in compile time
    - until PHP 5.3, only used within a class (cannot be used within global scope)

- define()
    - is defined in run-time
    - only be used in global scope

## Conclusion

use `const` rather than `define()` if no specific reason