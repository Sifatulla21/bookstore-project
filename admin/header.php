<?php session_start(); 

require_once '../config.php';
  
$noti="";

  $sql = "SELECT * FROM orders";
  $res = mysqli_query($link,$sql);
  $num = mysqli_num_rows($res);

   $sql = "SELECT * FROM notification WHERE status = 0";
  $res = mysqli_query($link,$sql);
  //$noti = mysqli_num_rows($res);
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<style>
.info
{
  text-align: right;
  margin-bottom: 20px;
}

#noti{
  display: none;
}

.navbar .navbar-nav .nav-item:hover #noti{
  display: block;
  width: 150px;
  height: 30px;
  line-height: 20px;
  border-radius: 1px;
  background-color: black;
  color: white;
  padding: 5px;
  text-align: center;
}

#new_noti{
  display: none;
  width: 200px;
  height: 40px;
  line-height: 40px;
  background:rgb(0,0,0,0.9);
  vertical-align: center;
  text-align: center;
  
  position: relative;
  color: white;
}
</style>
  </head>
  <body class="bg-info">
  <div class="container">
    <div class="info">
      Contact Us:<i class="fas fa-phone"></i>&nbsp;0195*******<br>
      Email:<i class="fas fa-envelope"></i>&nbsp;bookstore@gmail.com
    </div>
    <div id="new_noti">
      <?php echo "a new order came"; ?>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:info;">
      <a class="navbar-brand" href="profile.php"> <img src="images/onlinebookstore.png" alt="" href="80" width="80"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
         

        <?php
          if (!isset($_SESSION['aloggedin'])) {
          echo '  
              <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>';
        }else {
        echo '  
              <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <h5 class="dropdown-header">Hello, Admin</h5>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>';
        }
       ?>
        </ul>
      </div>
    </nav>
    <hr>
  </div>