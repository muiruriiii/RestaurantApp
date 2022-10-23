<?php
require("connect.php");
$sql_select="SELECT * FROM register ";

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

  <title>BTB |User Profile</title>
  <style media="screen">
    table, th, td {
      border: solid black 3px;
    }
  </style>
  <h1 class="title"><a href="home.php" class="link">BETWEEN TWO BUNS</a></h1>
<h2 style="text-align:right;"><a href="admin.php"class="uglyph">Admin</a></a> | <a href="register.php"class="uglyph">User &ensp;</a></h2>
<h2 style="text-align:right;"><a href="logout.php"class="uglyph">Log Out &ensp;</a></h2>
  </head>
  <body>

    <nav>


      <i class="glyphicon glyphicon-user"></i>
     <a class="links" href="home.php">HOME</a>

     <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="menucart.php">MENU</a>

    <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="userprofile.php">USER PROFILE</a>

    <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="contact.php">CONTACT</a>

    <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="orderss.php">PAST ORDERS</a>

    </nav>

    <?php
 $row=$result->fetch_assoc();
     ?>

<h2>
<p style="text-align:center;">
Welcome <?= $_SESSION['user']['firstname']; ?>
&ensp;
</p>
</h2>


 <table style="text-align:center; margin: auto; width: 50%;">
   <tr>
     <th>First Name:</th>
     <td><?php echo $_SESSION['user']['firstname']; ?></td>
   </tr>
   <tr>
     <th>Last Name:</th>
     <td><?php echo $_SESSION['user']['lastname']; ?></td>
   </tr>
   <tr>
     <th>Email:</th>
     <td><?php echo $_SESSION['user']['email']; ?></td>
   </tr>
   <tr>
     <th>Tel No:</th>
     <td><?php echo $_SESSION['user']['telno']; ?></td>
   </tr>
   <tr>
     <th>Password:</th>
     <td><?php echo $_SESSION['user']['password']; ?></td>
   </tr>
 </table>

</body>
</html>
