``` php
function getFilePermission($path) {
      $length = strlen(decoct(fileperms($path)))-4;
      return substr(decoct(fileperms($path)),$length); // "0777" ,"0755" for example
}
```
``` php
$permission = getFilePermission($csvFileDirectory);
if($permission !== 0777) chmod($csvFileDirectory, 0777); // ォルダの権限変更
```