<?php

  include('db_connection.php');
  $alert=false;
  $error=false;
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {

    $username=$_POST['name'];
    $email=$_POST['email1'];
    $pass=$_POST['pass1'];
    $cpass=$_POST['cpass1'];

    if($pass == $cpass)
    {

      $sql="INSERT INTO `SignUp` (`user_Name`,`email`,`pass`,`cpass`) values('$username','$email','$pass','$cpass')";
      $result=mysqli_query($conn,$sql);

        if($result)
        {
          $alert=true;
        }
    }
    else
    {

      $error="Password No Match";


    }
  }
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <?php  require '_nav.php'  ?>

  <?php
    if($alert){

      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Successfully!</strong> Sign UP successfully!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    

  
  if($error){

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Password MissMatch!</strong> '.$error.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  


  }

  ?>

  
<div class="container mt-5">
    <h1 class="text-center">Sign In </h1>
<form action="SignUp.php" method="post">


<div class="mb-3">
    <label for="name" class="form-label">UserName</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email1" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>



  
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" name="pass1" class="form-control" id="pass">
  </div>
  
  <div class="mb-3">
    <label for="cpass" class="form-label">Comform Password</label>
    <input type="password" name="cpass1" class="form-control" id="cpass">
    <div id="emailHelp" class="form-text">Make Sure PAssword must be SAME.</div>

  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>