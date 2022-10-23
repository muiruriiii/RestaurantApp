<?php
require("connect.php");
session_start();
// if (!isset($_SESSION)) {
//   session_start();
// }
//$sql_table="CREATE TABLE shopping_cart( foodid INT(8) AUTO_INCREMENT PRIMARY KEY ,foodname VARCHAR(30) NOT NULL ,Quantity INT(8) NOT NULL,unitprice INT(8) NOT NULL NOT NULL,price INT(8) NOT NULL)";
if(isset($_POST["btnAddtoCart"])) {
 $userid=$_SESSION["user"]["userid"];
  $foodid=$_POST["food_id"];
  $quantity=$_POST["quantity"];
  $price=$_POST["price"];
 $foodname=$_POST["foodname"];
  $sql = "SELECT * FROM menu WHERE foodid = '" . $foodid . "' LIMIT 1";
  $product = mysqli_fetch_assoc(mysqli_query($conn, $sql));

  $cart = $_SESSION['cart'];

  if(isset($cart[$foodid])) {
    $cart[$foodid]['quantity'] += $quantity;
  } else {
    $cart[$foodid] = [
      'image' => $product['imagepath'],
      'foodname' => $product['foodname'],
      'quantity' => $quantity,
      'price' => $product['foodprice'],
    ];
  }
// $cart = [];
  $_SESSION['cart'] = $cart;
// echo "<pre>";
// print_r($_SESSION['cart']);
// die;

  header('Location: http://localhost/food_web/orderss.php');
header('Location: http://localhost/food_web/menucart.php');
  $sql_insert="INSERT INTO tblorder(userid,foodid,quantity,unitprice,foodname) VALUES ('$userid','$foodid','$quantity','$price','".$foodname."')";
// echo $sql_insert;


if (isset($sql_insert)) {
  if($conn->query($sql_insert)===TRUE){
    header('Location: http://localhost/food_web/menucart.php');
    echo "Data inserted ";
  }else{
    "Error in inserting data".$conn->error;
  }
}
}
 ?>
