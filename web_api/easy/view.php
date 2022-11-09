<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: PUT, GET, POST");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
// include database connection
include 'config/database.php';
 
// delete message prompt will be here
 
// select all data
$query = "SELECT p_id, p_name, p_description, p_price FROM products ORDER BY p_id DESC";
$result = $con->query($query);

print_r($result);
echo "<hr>";
$output = array();
$i = 0;
while($row = $result->fetch_assoc()){
    $output[$i] = $row;
    $i++;
}
echo "<pre>";
print_r($output);
echo "<hr>";

 $json = json_encode($output);
 echo $json;
?>
