<?php

$host="localhost";
$user="root";
$password="";
$db="rlc_db";



$connection = mysqli_connect($host,$user,$password,$db);


if (isset($_POST['username'])){

  $uname=$_POST['username'];
  $password=$_POST['password'];



  $result=mysqli_query($connection,"select * from logins where user='".$uname."'AND Pass='".$password."'
  limit 1");

  if(mysqli_num_rows($result)==1){
    echo'<script type="text/javascript">
    window.open("http://localhost/ressy_project/dashboard.html");
</script>';
  }
  else{
    echo " You Have Entered Incorrect Password or Username";
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="icon" href="SecondarySignature_Full_Web.png">
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        padding: 14px;
        min-height: 100vh;
        width: 100%;
        display: grid;
        background-color: gray;
      }

      .sign-in {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2em;
      }

      input {
        width: 100%;
        letter-spacing: 0.5px;
        padding: 10px;
      }

      button.submit {
        margin: 32px auto;
        padding: 10px 40px;
        border-radius: 30px;
      }
    </style>
  </head>
  <body>

    <div class="sign-in">
      <form  method="POST" action="">
        <h4>Welcome</h4>
        <h6 style="font-weight:normal">Please enter your login credentials.</h6>

        <br>
        <div>
          <h6>Input Valpo Username</h6> <input type="text" name="username" id="Username" placeholder="Username">
        </div><br>
        <div>
          <h6>Input Password</h6> <input type="password"  name="password" id="Password" placeholder="Password">
        </div>
        <button class="submit">Login</button>
      </form>
    </div>



  </body>
</html>
