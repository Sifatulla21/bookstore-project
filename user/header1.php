
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>online book store</title>
        
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <style>
    .info
    {
      text-align: right;
      margin-bottom: 20px;
    }
    </style>
      </head>
      <body class="bg-info">
      <div class="container">
        <div class="info">
          Contact Us:<i class="fas fa-phone"></i>&nbsp;0195*******<br>
          Email:<i class="fas fa-envelope"></i>&nbsp;bookstore@gmail.com
        </div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:info;">
          <a class="navbar-brand" href="index.php"> <img src="images/onlinebookstore.png" alt="" href="80" width="80"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">

            <?php

              echo '<li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Signup</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">contact</a>
              </li>  ';

           ?>
            </ul>
          </div>
        </nav>
        <hr>
      </div>

