<?php
require("connect.php");

$sql_select="SELECT * FROM tblorder ";

$result=$conn->query($sql_select);
// print_r($result);
session_start();

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
    <title>BTB |Orders Page </title>
    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 80%;
      margin:20px 120px;
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 10px;
    }
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
          </head>


        <body>
                <h1 class="title"><a href="home.php" class="link">BETWEEN TWO BUNS</a></h1>



      <h2 style="text-align:right;"><a href="home.php"class="uglyph">Home</a></a> | <a href="logout.php"class="uglyph">Log Out &ensp;</a></h2>
      <h2 style="text-align:right;">
         <a href="adminregisters.php"class="uglyph">Create User &ensp;</a>
       </h2>



 <div class="sidenav">
   <a href="dashboard.php"class="active">Dashboard</a>
   <a href="#">Users</a>
      <a href="#">Accounts</a>
         <a href="orderss.php">Orders</a>
            <a href="inventory.php">Inventory</a>
          </div>


      <h2 style="text-align:center;">All Orders</h2>
      <div class="main">


    <h2>
    <p style="text-align:center;">
    Welcome <?= $_SESSION['user']['firstname']; ?>
    &ensp;
    </p>
    </h2>
        <table>
<tr>
<th>User ID</th>
<th>Food ID</th>
<th>Unit Price</th>
<th>Quantity</th>
<th>Food Name</th>

</tr>

<?php


  while($row=$result->fetch_assoc()){
  //  $rows[]=$row;
  // print_r( $row);
  ?>
  <tr>
  <td><?php echo $row["userid"];?></td>
  <td><?php echo $row["foodid"];?></td>
    <td><?php echo $row["unitprice"];?></td>
  <td><?php echo $row["quantity"];?></td>
        <td><?php echo $row["foodname"] ?></td>

  </tr>

<?php
  }
 ?>

 <?php
 if($_SESSION["user"]['usertype'] === 'admin')
 {
   $sql_select="SELECT * FROM tblorder";
 }
 else {
   $sql_select="SELECT `unitprice`,`quantity`,`price`,`foodname`,`userid` FROM `order` WHERE `userid` = ".$_SESSION["user"]["userid"];
 }
 ?>
</table>

</body>
</html>
