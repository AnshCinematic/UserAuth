<?php
session_start();
$email= $_SESSION['username'];
$submit =false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "_dbconnect.php";
    $feed = $_POST['feedback'];
    $sql = "INSERT INTO `feedback` (`email`,`feedback`) VALUES ('$email','$feed')";
    $result = mysqli_query($conn,$sql);
    $submit = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="feedback.css">
    <title>feedback</title>
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
<?php
if($submit){
echo'
<div class="alert alert-success" role="alert">
Thank you for giving us the feedback. It will help us to improve.
</div>
';
}
?>
<!-- form -->
 <div class="container">
    <div class="head">
    <h1>Give us Your feedback !</h1>
    </div>
<form action="http://localhost/LoginSystem/feedback.php" method="post">
<div class="mb-3">
  <label for="feedback" class="form-label">Your feedback is important to us.</label>
  <textarea class="form-control" id="feedback" name="feedback" rows="10"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
 </div>
</form>
    <button class="btn1"><a href="welcome.php">Back</a></button>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>