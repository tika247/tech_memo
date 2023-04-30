# phpcs phpcbf in VSCode

setting Process to format PHP codes followed by PSR-12

## Process

0. install Composer globally

https://getcomposer.org/download/

Look in ↑. Download and run Composer-Setup.exe

1. install PHP_CodeSniffer globally

in terminal from where composer command can be executed

```
composer require --dev "squizlabs/php_codesniffer=3.*"
```

2. check if phpcs & phpcbf are installed

```
C:\Users\〇〇〇-〇〇〇\AppData\Roaming\Composer\vendor\bin
└phpcs
└phpcs.bat
└phpcs
└phpcs.bat
```

3. install Extension in VSCode

install below

- phpcs
- phpcbf

4. edit setting.js

- setting icon > Setting > serch by `phpcs` > click `Edit in settings.json`
- add codes below

```
"phpcs.standard": "PSR12",
"[php]": {
  "editor.formatOnSave": false,
  "editor.defaultFormatter": "persoderlind.vscode-phpcbf"
},
"phpcs.executablePath": "C:\\Users\\nishina-takahiro\\AppData\\Roaming\\Composer\\vendor\\bin\\phpcs",
"phpcs.warningSeverity": 6,
"phpcbf.enable": true,
"phpcbf.executablePath": "C:\\Users\\nishina-takahiro\\AppData\\Roaming\\Composer\\vendor\\bin\\phpcbf.bat",
"phpcbf.standard": "PSR12",
"phpcbf.onsave": false,
```

* `phpcbf.executablePath` has to be set `phpcbf.bat`

5. Let's format!

- open PHP file
- if not followed by PSR12, codes will be highlighted
- click-right-mouse and select `format document`
- codes will be formatted