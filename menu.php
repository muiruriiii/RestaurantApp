<?php
require("connect.php");
$sql="SELECT * FROM menu";
$results=$conn->query($sql);

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

<title>BTB |Menu</title>

  </head>
    <body style="background-color:#ffe6e6">
      <h1 class="title"><a href="home.html" class="link">BETWEEN TWO BUNS</a></h1>
      <h2 style="text-align:right;"><a href="admin.php"class="uglyph">Admin</a></a> | <a href="register.php"class="uglyph">User &ensp;</a></h2>
    <nav>

            <i class="glyphicon glyphicon-user"></i>
           <a class="links" href="home.php">HOME</a>

           <i class="glyphicon glyphicon-user"></i>
          <a class="links" href="index.php">MENU</a>

          <i class="glyphicon glyphicon-user"></i>
          <a class="links" href="gallery.php">GALLERY</a>

          <i class="glyphicon glyphicon-user"></i>
          <a class="links" href="contact.php">CONTACT</a>

    <!-- <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="register.html">ACCOUNT</a> -->

    </nav>
<h2 style="text-align:center;">ORDER NOW!</h2>
<header style="text-align:center;">
<p>-Enjoy your favourite meal from us today!-</p>
  <br><br><br>
</header>

<table style="margin-left:10rem;">
  <thead>
<tr>
<th>

</th>
</tr>
  </thead>
  <tbody>
    <?php while($row=$results->fetch_assoc())  { ?>

    <tr>
    <td><?=$row['foodname']?>:<li><?=$row['fooddescription']?></li></td>

    <td style="padding-left:5rem;"><?=$row['foodprice']?></td>
        <td  style="padding-left:5rem;"><img src="./inventory/<?=$row['imagepath']?>" style="width:15rem; height:15rem; object-fit:cover; border-radius:50%;"/></td>
    </tr>

    <td style="margin-left:10rem;text-align:center;">
        <h2 ><button type="submit" name="add_to_cart"  style="background-color:black;"><a style="text-decoration:none;color:white;text-align:center;" href="order.php?i=<?php echo $row['foodid']; ?>"></a></button></h2>
    <b><hr style="color:black;"></b>
    </td>


<?php } ?>

  </tbody>
</table>
<br><br><br>



  <button style="background-color:black;"><a style="text-decoration:none;color:white;text-align:right;" href="order.php">View Cart</a></button>
  </body>
</html>
