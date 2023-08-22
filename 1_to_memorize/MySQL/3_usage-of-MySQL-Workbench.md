# Usage of MySQL Workbench

- Execute commands in a Query Tab
    - to open a Query Tab: **Header>File>New Query Tab**
    - to execute a command: **Click a thunder icon**

## Command

### Basic

- `SHOW databases;`
    - to see all exsisting databases
- `CREATE DATABASE IF NOT EXISTS calendar;`
- `DROP DATEBASE calendar`
- `USE calendar;`
    - to specify which database is going to be manipulated
- ``` sql
  USE calendar;
  
  CREATE TABLE IF NOT EXISTS User (
  sqlID INT NOT NULL AUTO_INCREMENT,
  userID VARCHAR(20) NOT NULL,
  username VARCHAR(20) NOT NULL,
  password VARCHAR(20) NOT NULL,
  schedule TEXT NOT NULL,
  PRIMARY KEY (sqlID)
  );
  ```
    - to create table
    - must define type to a every single key
    - `NOT NULL`
        - disable to store `NULL`
    - `AUTO_INCREMENT`
        - automatically increase data
        - needed to be defined with `PRIMAEY KEY`
- `DROP TABLE User;`

### Command to manipulate table

- `INSERT INTO User (userID, username, password, schedule) VALUES ('1', 'a', '', NULL);`
- `UPDATE User SET password = 'a' WHERE username = 'a';`
- `DELETE FROM User WHERE username = 'a';`
- `SELECT * FROM User`
    - get all data from User
- `SELECT * FROM User WHERE username = 'a'`
    - get all data whose username is equal to `a`

### Function

- Inner Join
  ``` sql
  SELECT 
    user.id, user.name, user.address, user.age, department.name 
  FROM 
    user 
  INNER JOIN department ON user.department_id = department.id;
  ```
    - result is all user data whose department_id is equal to department.id
- Outer Join (LEFT JOIN || RIGHT JOIN)
  ``` sql
  SELECT 
    user.id, user.name, user.address, user.age, department.name 
  FROM 
    user
  Left JOIN department ON user.department_id = department.id;
  ```
    - result is all user data but if the condition doesn't match, `NULL` will be returned in the field
- Cross Join
    - simply join two tables
- AVG
    - get an average of data
    ``` sql
    SELECT SalesPerson.FirstName, SalesPerson.LastName, AVG(Orders.TotalDue) AS AverageSales
    FROM Salesperson
    INNER JOIN Orders ON Salesperson.SalespersonID = Orders.SalespersonID
    GROUP BY Salesperson.SalespersonID /* specify a key going to be criteria (this means the key won't be duplicated) */
    ORDER BY AverageSales DESC /* sort: descending order */
    LIMIT 10 /* only get 10 */
    ```
- LIKE
    - with condition `WHERE`, `LIKE` allows pattern matching
    - `SELECT Countries.name FROM Countries WHERE Countries.name LIKE 'Ja%_n' HAVING COUNT(Countries.name) = 5;`
        - `%`: Any letters more than 0
        - `_`: one specific letter
        - `Japan` is result and not including `Jordan`