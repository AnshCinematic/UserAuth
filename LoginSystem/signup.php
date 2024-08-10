<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "_dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exist =false;
    //check whether this username exists or not
    $existSql = "SELECT * FROM `userinfo` where name = '$username'";
    $result = mysqli_query($conn,$existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
      $exist=true;
    }
    else{
      $exist=false;
    }

    if(($password==$cpassword) && $exist==false){
        $sql = "INSERT INTO `userinfo` (`name`, `password`, `dt`) VALUES ('$username' , '$password' , current_timestamp())";
        $result = mysqli_query($conn,$sql);
        if($result){
            $showAlert=true;
        }
    }
    else{
        $showError = "Password do not Match OR Username already exist";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>

    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg  bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/LoginSystem">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LoginSystem/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/LoginSystem/signup.php">Sign Up</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

     <!-- Alert -->
    <?php
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Sucess!</strong> Your account has been created successfuly..
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Error!?!#' .$showError.'
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
    }
    ?>

     <!-- sign up form  -->
      <div class="container">
      <form action="http://localhost/LoginSystem/signup.php" method="post">
  <div class="mb-3 col-md-13">
    <label for="username" class="form-label">Enter Username</label>
    <input type="email" maxlength="50" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 col-md-13">
    <label for="password" class="form-label">Create Password</label>
    <input type="password"  maxlength="23" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 col-md-13">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  <div id="emailHelp" class="form-text">Make sure you have written the same password</div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>