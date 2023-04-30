# Composer

## usage

1. `mkfile` `composer.json` in a top of project directory
2. write package information you want to install in `composer.json` like below
    - info can be refered to [Packagist](https://packagist.org/)

``` json
{
  "require": {
    // "php" : "^5.5 || ^7.0", // ←is optional but possible to define php version
    "phpmailer/phpmailer": "^6.1"
  },
  "require-dev": { // only need for development
    "monolog/monolog": "1.0.*"
  }
}
```

3. install according to `composer.json` by executing blow

```
composer install
```

4. created below
    - composer.lock
        - installed package information are written
    - vender
        - installed package folders are in

5. include packages in a file where you want to use it
    - check a usage of the package in its doc

``` php
require_once($_SERVER["DOCUMENT_ROOT"] . '/vendor/phpmailer.php');
```

### to install additional packages

1. update `composer.json`
2. execute `composer update`

### other commands

- `composer install –no-dev`
    - not install packages designated by `require-dev`
    - used in a production server

## install Composer to Server

https://getcomposer.org/download/

1. open the terminal
2. cd to a workspace
    - e.g., `/home/nishina-takahiro`
3. execute command lines below in order

``` php
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

4. check if `composer.phr` is created in the current directory
5. create `bin` folder in the current directory by `mkdir bin`
    - execute `ls`, will see `www` `bin` `composer.phar`
6. move `composer.phar` file to inside of `bin/` by executing command blow

``` php
mv composer.phar bin/composer
```

7. check if `6` is properly succeeded by peeking `bin` folder
8. to check if executing Composer command is possible, execute command below

``` php
composer -V
```

9. if the result is shown, installing process is done!