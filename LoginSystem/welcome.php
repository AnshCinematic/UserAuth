<!-- <?php
    // session_start();
    // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
    //   header("location :login.php");
    //   exit;
    // }
?> -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">
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
          <a class="nav-link" href="/LoginSystem/signup.php">Sign Up</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<button class="btn1"><a class="link" href="login.php">Log Out</a></button>

<div class="container">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome!</h4>
  <p>You have successfuly logged in to MyApp! If you have not resigterd yet , Register Now</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to logout using <a href="login.php">this link</a>.</p>
</div>
<div class="container1">

<div class="details">
  <div class="registration">
    <a href="registration.php">Register Yourself</a>
  </div>
  <div class="feedback">
    <a href="feedback.php">Give us feedback!</a>
  </div>
</div>

</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>