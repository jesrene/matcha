<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Log In | Matcha HQ </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./login.css">
    <link rel="icon" type="image/png" href="./images/MatchaHQicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <div class="logo">
      <img src="./images/MatchaHQ.gif">
    </div>

    <h1> Matcha HQ </h1>

    <div class="container">
        <h2> Members Log In </h2>
        <a href="./index.php"><h5 class="home">Back to Home ></h5></a>
        
      <div class="logIn">
        <form action="./login.php" method="POST">
          <label for="email"> Email: </label>
          <input type="text" placeholder="Type your email" id="email" name="email" required>

          <label for="psw"> Password: </label>
          <input type="password" placeholder="Type your password" id="psw" name="user_password" required>

          <div class="forgotpassword">
            <span class="psw"> <a href="#"> Forgot password?</a></span>
          </div>

          <div class="buttonclass">
           <button class="submit">Login</button>
          </div>

          <div class="newacc">
            <span class="new">Don't have an account? <a href="./registration.php"> REGISTER HERE.</a></span>
          </div>

          <div class="option"> OR </div>
        </form>

        <div class="col">
          <a href="#" class="fb btn">
            <i class="fa fa-facebook"></i> Login with Facebook
          </a>
          <a href="#" class="twitter btn">
            <i class="fa fa-twitter"></i> Login with Twitter
          </a>
          <a href="#" class="google btn">
            <i class="fa fa-google"></i> Login with Google+
          </a>
        </div>
      </div>
    </div>
    
  </body>
</html>

<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "login";
    $handler = mysqli_connect($servername, $username, $password, $dbname);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $user_password = $_POST['user_password'];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql_query = "INSERT INTO login (email, user_password) VALUES('$email', '$user_password')";
      mysqli_query($handler, $sql_query);
      header("Location:./index.php");
    }
?>