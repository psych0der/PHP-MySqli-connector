PHP-MySqli Connector
====================

PHP-MySqli connector is php class to manage CRUD operations in MySqli using mysqli php connection.It provides basic CRUD operations including SELECT , INSERT ,UPDATE  , DELETE , DROP , change-database.
These CRUD operations are handled through simle class methods and there is no need to  write full sql statements.

## Usage
Using PHP-MySqli connector is very simple . just include 
database.php in file where you want to access database and perform operations.

```php
<?php
include 'database.php';
?>
```


To perform sql operations , create a new object of database class.

```php
<?php
include 'database.php';
$myconn = new Database('host','username','password','database');

?>
```


Here host referes to address of mysql host , username : mysql username , password : mysql password, database : name of database.

`NOTE : database can also be switched later using changeDatabase() method`

## Methods

##### connect()

```php
<?php
$myconn->connect();
?>
```
This public method connects to mysql client using information provided in constructor.`This mehtod is called implicitely in constructor`.


##### disconnect()
This method disconnects the mysql client and unsets the connection variable.`This method is impliitely called in destructor , but can aso be called explicitely`.

##### changeDatabase('name-of-databse')

This method is used to switch database from the one selected using constructor.

```php
<?php
$myconn->changeDatabase('name-of-database');
?>
```

##### select($table,$count = false,$cols = "*",$where=null , $order = null,$limit = null)
This method is used to prepare select statement and provides results in form of array.
>$table referes to name of table.
>$count is boolean value to denote if only count needs to be executed
>$rows is array of names of columns to select
> $where and $order are strings containing where and orderby conditions
>$limit is limit clause needed for pagination.

```php
<?php
$myconn->select('table',array('first','last'),'first="mayank"');
?>
```

##### #insert($table ,$values ,$cols = null)
This method prepares insert statement for sql and retyrn true or false based on success or faliure of sql statement

> $table : name of table
> $values is array of values to be inserted.
> $cols is array of coluns to select


```php
<?php
$myconn->insert('table',array('mayank','bhola'),array('first',''));
?>
```
##### delete($table, $where= null)
This method prepares delete statement for sql and returns true or false based on success or faliure of sql statement.If  $where is not provided this method drops the table.

> $table : name of table
> $where is string of where condition.


```php
<?php
$myconn->delete('table','last = "mayank"');
?>
```

##### update($table,$cols, $where)
This method prepares update statement for sql and returns true or false based on success or faliure of sql statement

> $table : name of table
> $where is array where even values including 0 contains where row ,odd values contain the clauses for the row.
> $cols is associative array  where key is name of column to update  and item is value which be used to update.

```php
<?php
$myconn->update('name',array('middle'=>'nobles0ul'),array('first','mayank'));
?>
```

##### getResult()
This method return result returned by select method. 

```php
<?php
$myconn->getResult();
?>
```
##### error()
This method returns mysql error if any.

```php
<?php
$myconn->error();
?>
```









