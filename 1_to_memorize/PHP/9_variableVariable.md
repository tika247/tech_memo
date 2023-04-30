# variable-variable

a variable to use for a variable's name by declaring like `${$name}`

``` php
$postNameArr = ["category", "contents", "name01", "name02", "furigana01", "furigana02", "company", "department", "postal01", "postal02", "prefecture", "address", "phone01", "phone02", "phone03", "fax01", "fax02", "fax03", "mail", "mailCheck"];

foreach($postNameArr as $name){
    ${$name} = $_POST[$name];
}
```