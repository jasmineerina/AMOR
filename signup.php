  <!-- php -->
<?php
// koneksi database
include 'koneksi/koneksi.php';
if(isset($_POST['signup'])){
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $no_hp = $_POST['no_hp'];
  $password = $_POST['password'];

  // menginput data ke database
  if($fullname==null || $username==null || $email==null || $no_hp==null || $password==null){
      echo "<script type='text/javascript'>alert('Data tidak boleh ada yang kosong');</script>";
  }
  else{
      mysqli_query($koneksi,"insert into pengguna values('','$fullname','$username','$email','$no_hp', '$password', 0)");
      header("Location:home.php"); // nyambung ke home terlogin
  }
}
?>
  <!-- akhir php -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="signup.css">
    <title>Sign Up</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="#">Amor</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="#">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item nav-link btn btn-outline-warning tombol" href="#">Login</a>
          </div>
        </div>
        </div>
      </nav>
      <!-- end navbar -->

      <!-- form signup -->
        <div class="signup-page">
        <div class="col-lg-10">
        <form action="" method="POST">
          <h1 class="judul">Sign Up</h1>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" aria-describedby="emailHelp" placeholder="Full Name" name="fullname">
          </div>
          <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" name="username">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group col-md-6">
            <label for="no_hp">Phone Number</label>
            <input type="text" class="form-control" id="no_hp" aria-describedby="emailHelp" placeholder="Phone Number" name="no_hp">
          </div>
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          </div>
        <!-- </div> -->
        <!-- <div class="form-check-rb">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1">
          <label class="form-check-label" for="exampleRadios2">User
          </label>
        </div>
        <div class="form-check-rb">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">Kurir
          </label>
        </div> -->
      </div>
          <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label2" for="exampleCheck1">Correct</label>
          </div> -->
          <button type="signup" class="btn btn-primary button" value="Sign Up" name="signup">Sign Up</button>
        </form>
<!-- end form signup -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
