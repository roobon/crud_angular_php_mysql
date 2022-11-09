<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: PUT, GET, POST");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
 
// check if form was submitted
if($_POST){
    include 'config/database.php';

        // posted values
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        // write update query
        // in this case, it seemed like we have so many fields to pass and 
        // it is better to label them and not use question marks
        $query = "UPDATE products 
                    SET p_name='$name', p_description='$description', p_price='$price' 
                    WHERE p_id = '$id'";
 
        // prepare query for excecution
        $result = $con->query($query);
 
         
         
        // Execute the query
        if($con->affected_rows>0){
            echo json_encode(array('result'=>'success'));
        }else{
            echo json_encode(array('result'=>'fail'));
        } 
}
?>

<!-- <form method="post">
<div class="form-group">
      <label for="">Product ID</label>
      <input type="text"
        class="form-control" name="id" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Product Name</label>
      <input type="text"
        class="form-control" name="name" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Product Description</label>
      <input type="text"
        class="form-control" name="description" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Price</label>
      <input type="text"
        class="form-control" name="price" placeholder="">
    </div>
    <input type="submit" name="submit">
</form> -->