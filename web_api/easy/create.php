<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: PUT, GET, POST");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
if($_POST){

// include database connection
include 'config/database.php';

// posted values
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

// insert query
$query = "INSERT INTO products SET p_name='$name', p_description='$description', p_price='$price'";
// query for execution
$con->query($query);

// Execute the query
if($con->affected_rows>0){
    echo json_encode(array('result'=>'success'));
}else{
    echo json_encode(array('result'=>'fail'));
}
// show error

}
?>
<!-- <form method="post">
    <div class="form-group">
      <label for="">Product Name</label>
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Product Description</label>
      <input type="text"
        class="form-control" name="description" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Price</label>
      <input type="text"
        class="form-control" name="price" id="" aria-describedby="helpId" placeholder="">
    </div>
    <input type="submit" name="submit">
</form> -->