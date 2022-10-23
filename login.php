<?php
require("connect.php");
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
    <title>BTB |Login Page</title>
      <h1 class="title"><a href="home.php" class="link">BETWEEN TWO BUNS</a></h1>

  <body style="background-color:#ffe6e6">
<h2 style="text-align:right;"><a href="login.php"class="rlogin">LOGIN</a>&ensp;|<a href="register.php"class="rlogin">REGISTER</a></h2>

<img  class="img_avatar" src="avatar.png">
  </head>
<br>


<br><br><br>
<style>
.txt{
  width:90%;
  height:5%;
  border:1px solid brown;
  border-radius: 05px;
  padding: 20px 20px 20px 20px;
  margin: 20px 10px 25px 10px;
}

</style>
<!-- <div class="sidenav">
           <i class="glyphicon glyphicon-user"></i>
          <a class="links" href="home.php"class="active">HOME</a>

          <i class="glyphicon glyphicon-user"></i>
         <a class="links" href="menucart.php">MENU</a>

         <i class="glyphicon glyphicon-user"></i>
         <a class="links" href="gallery.php">GALLERY</a>

         <i class="glyphicon glyphicon-user"></i>
         <a class="links" href="contact.php">CONTACT</a>

         <i class="glyphicon glyphicon-user"></i>
         <a class="links" href="order.php">ORDER</a>

         </nav>
       </div> -->
<div class="container3">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
          <form class="centered3" method="post" action="login.php">
          <label for="email1">Email:</label>
             <input type="text"class="txt" name="email" id="email1" ><br><br>

<br>
             <label for="pwd1">Password:</label>
               <input type="password"class="txt" id="pwd1" name="pwd" minlength="8"><br><br>

<div class="btn_menu">
<button type="submit" name="loginbtn" style="transform: translate(-50%, 100%);"class="vmenu2">LOGIN</button>
</div>

        </form>
<?php
if(isset($_POST['loginbtn']))
{
  $email=$_POST['email'];
  $password=$_POST['pwd'];

  $query="SELECT * FROM register WHERE email='$email' AND password='$password' LIMIT 1";

  if($data=mysqli_query($conn, $query))
  {
    $user=mysqli_fetch_assoc($data);
      session_start();
      $_SESSION["user"] = $user;
      print_r($user);
    if($user['usertype'] === 'admin')
    {
        header('location: dashboard.php');
    } else
      {
          $_SESSION["email"]=$email;
      header('location: userprofile.php');
    }
//     else
//       {
// echo "No records found.";
//       }
    }
  }




 ?>


  </body>
</html>
