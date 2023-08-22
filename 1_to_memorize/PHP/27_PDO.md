## PDO(PHP Data Objects)

- to manipulate the database secretly, which means that the database credentials are not exposed in the code
- Abstraction layer: PDO provides a database access abstraction layer that allows you to work with different databases using the same set of functions.
    - no matter what database we use, the function to issue queries and fetch data will be the same
        - どのデータベースを利用する場合でも同じ関数を使うことができる
- Object-oriented syntax: PDO provides an object-oriented syntax that makes it easier to work with databases.
- Support for prepared statements: PDO supports prepared statements, which can help prevent SQL injection attacks.
- Better exception handling: PDO provides better exception handling than the traditional way of handling databases in PHP.
- Secure and reusable APIs: PDO provides secure and reusable APIs for working with databases.

https://www.javadrive.jp/php/pdo/

### PDOでOracleに接続する

https://www.php.net/manual/ja/ref.pdo-oci.php