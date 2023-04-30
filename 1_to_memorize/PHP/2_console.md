# Console

1. var_dump()

2. show a value in browser console like JS does

``` php
<?php
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
?>

debug_to_console($VALUE);
```