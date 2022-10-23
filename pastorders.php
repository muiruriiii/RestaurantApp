<?php
require("connect.php");
$sql_select="SELECT * FROM shopping_cart ";

$result=$conn->query($sql_select);
// print_r($result);
session_start();
$total_price=0;
$total_quantity=0;

    foreach ($_SESSION["cart"] as $id => $item)
    {
      $total_quantity +=$item["quantity"];
      $total_price +=$item["quantity"]*$item["price"];

    }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="style2.css">
   <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@300&family=Scope+One&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=PT+Sans&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Jomhuria&family=PT+Sans&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">

   <title>BTB |Checkout Page</title>
   <h1 class="title"><a href="home.php" class="link">BETWEEN TWO BUNS</a></h1>
   <h2 style="text-align:right;"><a href="admin.php"class="uglyph">Admin</a></a> | <a href="register.php"class="uglyph">User &ensp;</a></h2>
 </head>
   <body style="background-color:#ffe6e6">
     <nav>


       <i class="glyphicon glyphicon-user"></i>
      <a class="links" href="home.php">HOME</a>

      <i class="glyphicon glyphicon-user"></i>
     <a class="links" href="menucart.php">MENU</a>

     <i class="glyphicon glyphicon-user"></i>
     <a class="links" href="gallery.php">GALLERY</a>

     <i class="glyphicon glyphicon-user"></i>
     <a class="links" href="contact.php">CONTACT</a>

     <!-- <i class="glyphicon glyphicon-user"></i>
     <a class="links" href="register.html">ACCOUNT</a> -->

     </nav>
     <p style="text-align:right;text-decoration:none;"><a href="menucart.php">Click here to place an order...</a></p>
     <h2>
     <p style="text-align:center;">
     Welcome <?= $_SESSION['user']['firstname']; ?>
     &ensp;<br>
     Your order is being processed.
     <br>
     Your Order Number is: <?= $id; ?>
     <br>
     </p>
     </h2>
       <br>


 <table style="text-align:center; margin: auto; width: 50%;">
   <tr>
     <th>Total Price:</th>
     <td> The total payment is <?= "Ksh ".$total_price; ?></td>
   </tr>
   <tr>
     <th>Total Quantity:</th>
     <td>The total quantity is <?= $total_quantity; ?></td>
   </tr>
   <tr>
     <th>Food Name:</th>
     <td> <?= $item["foodname"]; ?></td>
   </tr>
   <tr>
     <?php
     $i=1;
     $total_price=0;
     $total_quantity = 0;
     $item["foodname"]=0;
         foreach ($_SESSION["cart"] as $id => $item){
           $item_price = $item["quantity"]*$item["price"];
           $total_quantity +=$item["quantity"];
           $total_price +=$item_price;
           $item["foodname"];
       ?>
       <?php
}
        ?>

 </table>
 <?php

   ?>

</body>
</html>
