<?php
require_once("connect.php");

if(isset($_POST["uploadbtn"]))
{

   $file=$_FILES["image"];
  $file_path="inventory/";
  $original_file_name=$_FILES['image']['name'];
  $file_tmp_location=$_FILES['image']['tmp_name'];

  move_uploaded_file( $file_tmp_location,  $file_path. $original_file_name);
echo '<pre>';
print_r($file_tmp_location);

$sql="INSERT INTO menu(foodname,fooddescription,imagepath,foodprice) VALUES ('".$_POST['name']."','".$_POST['desc']."','".$original_file_name."','".$_POST['price']."')";

if($conn->query($sql))
{
  header('Location: http://localhost/food_web/inventory.php');
}else{
   echo "Error in inserting data".$conn->error;

}
}

 ?>
