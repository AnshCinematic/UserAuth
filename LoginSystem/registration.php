<?php
session_start();
include "_dbconnect.php";
$email = $_SESSION['username']; 
$sqli = "SELECT * FROM completeinfo WHERE email='$email'";
$result2 = mysqli_query($conn, $sqli);
$numOfExistRows = mysqli_num_rows($result2);


if($numOfExistRows >0){

    echo '
    <!doctype html>
    <html lang="en">
      <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
    ';
    echo'
    <h1>You have already registered yourself !</h1>
    <h3>Here are your entered details :-</h3><br><hr>
    ';

    $row = mysqli_fetch_assoc($result2);


    echo "Email: " . $row["email"] . "<br>";
    echo "Name: " . $row["name"] . "<br>";
    echo "College: " . $row["college"] . "<br>";
    echo "Course: " . $row["course"] . "<br>";
    echo "contact: " . $row["contact"] . "<br>";
    echo "dob: " . $row["dob"] . "<br>";
    echo '<hr>';
    
    echo "<button class='backToWelcome'><a href='welcome.php'>Back to Welcome Page<a></button><br>";
}
else{

if($_SERVER["REQUEST_METHOD"]=="POST"){
      include "_dbconnect.php";
      $name =$_POST['traineeName'];
      $branch=$_POST['branch'];
      $date =$_POST['data'];
      $phone =$_POST['phoneNo'];
      $clgname =$_POST['clgname'];
      $email =$_POST['email'];
      $pic =$_POST['file'];

      $Isql = "INSERT INTO `completeinfo` (`email`, `name`, `college`, `course`, `contact`, `dob`) VALUES ('$email', '$name','$clgname','$branch', '$phone', '$date')";
      $result1 = mysqli_query($conn,$Isql);
    }
    echo '
    <!doctype html>
    <html lang="en">
      <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css">
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

<div class="container1">
<form action="http://localhost/Loginsystem/registration.php" method="post">
        <div class="mb-2">
          <label for="traineeName" class="form-label">Trainee Name:</label>
          <input type="text" class="form-control" name="traineeName">
        </div>
        <div class="mb-2">
          <label for="branch" class="form-label">Branch:</label>
          <select class="form-select" aria-label="Default select example" name="branch">
            <option selected >Select</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="Civil">Civil</option>
          </select>
        </div>
        <div class="date mb-2">
            <label for="date">Date:</label><br>
            <input type="date" name="data">
        </div>
        <div class="mb-2">
            <label for="phoneNo" class="form-label">Phone No:</label>
            <input type="text" class="form-control" name="phoneNo">
        </div>
        <div class="mb-2">
            <label for="clgname" class="form-label">College Name:</label>
            <input type="text" class="form-control" name="clgname">
          </div>
          <div class="mb-2">
            <label for="file" class="form-label">Photo:</label>
            <input type="file" class="form-control" name="file">
          </div>
          <div class="mb-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We will never share your email with anyone else.</div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <button class="backToWelcome"><a href="welcome.php">Back to Welcome Page<a></button>;

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
  ';
}
?>