<?php 
$firstname = $_POST["firstname"] ?? "";
$lastname = $_POST["lastname"] ?? "";
$age = $_POST["age"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

$role = "user";

$errorMessage = "";

  if ($email != "" && $password != "") {
      $fp = fopen("./data.txt","a");
      fwrite($fp, "\n user,{$email},{$password},{$firstname},{$lastname},{$age}");
      fclose($fp);
  
    header("Location:login.php");
  }else{
    $errorMessage = "Please enter your email and password!";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">create a new account</h1>

        <form action="signup.php" method="POST">

        <div class="form-groun">
        <label for="firstname">First name</label>
        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="enter your firstname">
        </div>

        <div class="form-groun">
        <label for="lastname">Last name</label>
        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="enter your lastname">
        </div>

        <div class="form-groun">
        <label for="age">Age</label>
        <input type="number" class="form-control" name="age" id="age" placeholder="enter your age">
        </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="******" >
  </div>

  <p class="text-error">
    <?php  echo $errorMessage; ?>
  </p>
  
  <button type="submit" class="btn btn-warning">Sign up</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>