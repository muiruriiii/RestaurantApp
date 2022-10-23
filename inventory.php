<?php
require("connect.php");
$sql_select="SELECT * FROM menu";

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
    <title>BTB |Inventory Page </title>
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
<h2>
  <p style="text-align:right;">
Welcome <?= $_SESSION['user']['firstname']; ?>
&ensp;
  </p>
</h2>


      <h2 style="text-align:right;"><a href="home.php"class="uglyph">Home</a></a> | <a href="logout.php"class="uglyph">Log Out &ensp;</a></h2>
      <h2 style="text-align:right;">
         <a href="inputfood.php"class="uglyph">Add food &ensp;</a>
       </h2>



 <div class="sidenav">
   <a href="dashboard.php"class="active">Dashboard</a>
   <a href="dashboard.php">Users</a>
      
         <a href="orderss.php">Orders</a>
            <a href="inventory.php">Inventory</a>
          </div>


      <h2 style="text-align:center;">Food</h2>
      <div class="main">
        <table>
<tr>
<th>Name of the Food</th>
<th>Food Description</th>
<th>Image Path</th>
<th>Food Price</th>
<th>Action</th>
</tr>
<?php

  while($row=$result->fetch_assoc()){
  //  $rows[]=$row;
  ?>
  <tr>
  <td><?php echo $row["foodname"];?></td>
  <td><?php echo $row["fooddescription"];?></td>
  <td><?php echo $row["imagepath"];?></td>
  <td><?php echo $row["foodprice"];?></td>

    <td>
  <a href="updatefood.php?i=<?php echo $row['foodid'];?>">Edit</a>
    </td>
    <td>
  <a href="deletefood.php?i=<?php echo $row['foodid'];?>">Delete</a>
    </td>
  </tr>
<?php
  }
 ?>


</table>

</body>
</html>
