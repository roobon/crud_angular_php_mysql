<?php
// used to connect to the database
$host = "localhost";
$db_name = "crud_angular_php_mysql";
$username = "root";
$password = "mysql";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
