<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
// get passed parameter value, in this case, the record ID
// isset() is a PHP function used to verify if a value is there or not
$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
 
//include database connection
include 'config/database.php';
 
// read current record's data

    // prepare select query
    $query = "SELECT p_id, p_name, p_description, p_price FROM products WHERE p_id = '$id'";
    $result = $con->query( $query );
    $row = $result->fetch_assoc();

 
    // store retrieved row to a variable
    $json = json_encode($row);
    echo $json;

 

?>
