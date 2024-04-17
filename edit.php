
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
    <link rel="stylesheet" href="edit.css">
    <title>Amor-Edit</title>
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
          <a class="nav-item nav-link" href="landingpage.php">ADMIN PAGE<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link btn btn-outline-warning tombol" href="login.php">Logout</a>
          </div>
        </div>
        </div>
      </nav>
      <!-- end navbar -->

      <!-- form edit -->
      <?php
      include 'koneksi/koneksi.php';
      $id = $_GET['id_user'];
      $data = mysqli_query($koneksi,"select * from pengguna where id_user='$id'");
      while ($d = mysqli_fetch_array($data)) {
        // code..
       ?>
        <div class="signup-page">
        <div class="col-lg-10">
        <form action="" method="POST">
          <h1 class="judul">Edit Data</h1>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleInputName">Full Name</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Full Name" value="<?= $d['fullname']?>" name="fullname">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputUsername">Username</label>
            <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Username" value="<?= $d['username']?>" name="username" >
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?= $d['email']?>" name="email">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputNohp">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputNohp" aria-describedby="emailHelp" placeholder="Phone Number" value="<?= $d['no_hp']?>" name="no_hp">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $d['password']?>" name="password">
          </div>
        </div>
          <button type="submit" class="btn btn-primary button" name="save">Save</button>
        </form>
        <?php
      }

       ?>
       <?php
       // menangkap data yang di kirim dari form
       if(isset($_POST['save'])){
         $username = $_POST['username'];
         $fullname = $_POST['fullname'];
         $email = $_POST['email'];
         $no_hp = $_POST['no_hp'];
         $password = $_POST['password'];

         // update data ke database
         mysqli_query($koneksi,"update pengguna set username='$username', fullname='$fullname', email='$email', no_hp='$no_hp', password='$password'  where id_user='$id'");

         // mengalihkan halaman kembali ke index.php
         header("location:admin.php");
       }
        ?>
<!-- end form edit -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
