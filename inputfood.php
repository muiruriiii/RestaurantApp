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
    <title>BTB |Food Page</title>
  
      <style>
      .txt{
        width:50%;
        height:50%;
        border:1px solid black;
        border-radius: 10px;
        padding: 10px 10px 10px 10px;
        margin: 10px 0px 15px 0px;
      }

      </style>
  </head>
  <body style="background-color:#ffe6e6">
<h1 class="title"><a href="home.php" class="link">BETWEEN TWO BUNS</a></h1>
<!-- <img class="img_avatar" src="avatar.png"> -->
<div class="sidenav">
  <a href="dashboard.php"class="active">Dashboard</a>
  <a href="dashboard.php">Users</a>

        <a href="orderss.php">Orders</a>
           <a href="inventory.php">Inventory</a>
         </div>


<!-- <h2 style="text-align:right;"><a href="register.php"class="rlogin">REGISTER</a>&ensp;|<a href="login.php"class="rlogin">LOGIN</a></h2> -->
<br><br>
<br><br>
<div class="container2">

          <!-- <form class="centered2"method="post" action="connfood.php"> -->
<form action="connfood.php"method="POST" enctype="multipart/form-data">
<br><br>
<br><br>

<div>
 <label for="name"> Food Name:</label>
   <input type="text"class="txt" id="name" name="name"><br><br>
</div>
<div>
  <label for="desc"> Food Description:</label>
<input type="text" class="txt" id="desc" name="desc"><br><br>
</div>
<div>
 <label for="lname"> Image path:</label>
  <input type="file"class="file"  id="path" name="image"><br><br>
</div>
<div>
  <label for="price"> Price:</label>
<input type="text" class="txt" id="price" name="price"><br><br>
</div>


<div class="btn_menu">
<button type="submit" name="uploadbtn" style="transform: translate(-50%, 50%);"class="vmenu2">UPLOAD</button>
</div>

</form>

</div>

</div>

  </body>

</html>
