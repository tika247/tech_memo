## Error Exception

to deal with unexpected errors (which is not perceive in advance) and prevent the system from stopping
* if possible to perceive in advance, use `if` or `switch` instead of using `Error Exception`

``` php

function divide($numerator, $denominator) {
  try {
    if ($denominator == 0) {
      throw new Exception("Division by zero");
    }
    $result = $numerator / $denominator;
    return $result;
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
}

echo divide(10, 0); // Output: Error: Division by zero

```