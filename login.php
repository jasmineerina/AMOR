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
    <link rel="stylesheet" href="login.css">
    <title>Amor-Login</title>
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
          <a class="nav-item nav-link" href="landingpage.php">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="feature.php">Features</a>
          <a class="nav-item nav-link" href="about.php">About</a>
          <a class="nav-item nav-link btn btn-outline-warning tombol" href="signup.php">Sign Up</a>
          </div>
        </div>
        </div>
      </nav>
      <!-- end navbar -->

      <!-- form signup -->
        <div class="login-page">
        <div class="col-lg-6">
          <?php
          	if(isset($_GET['pesan'])){
          		if($_GET['pesan'] == "gagal"){
          			echo "Login gagal! username dan password salah!";
          		}else if($_GET['pesan'] == "logout"){
          			echo "Anda telah berhasil logout";
          		}else if($_GET['pesan'] == "belum_login"){
          			echo "Anda harus login untuk mengakses halaman admin";
          		}
          	}
          ?>
        <form method="post" action="cek_login.php">
          <h1 class="judul">Login</h1>
          <div class="form-row">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" name="username">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label2" for="exampleCheck1">benar</label>
          </div>
          <a class="link" href="signup.php">belum mendaftar?</a>
          <button type="login" class="btn btn-primary button" name="login">Login</button>
        </form>
<!-- end form signup -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
