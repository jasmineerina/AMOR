<!doctype html>
<?php
include 'koneksi/koneksi.php';
if(isset($_GET['hapus'])){
  $id_user= $_GET['hapus'];
  mysqli_query($koneksi,"delete from pengguna where id_user='$id_user'");
  header("location:admin.php");
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="admin.css">
    <title>Amor-Admin Page</title>
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
            <a class="nav-item nav-link active" href="#">Admin Page<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link btn btn-outline-warning tombol" href="landingpage.php">Logout</a>
        </div>
      </div>
    </div>
    </nav>
<!-- end navbar -->

<!-- php -->

<!-- akhir php-->
<?php
$no = 1;
$data = mysqli_query($koneksi,"select * from pengguna where admin!=1");
while($d = mysqli_fetch_array($data)){
  ?>

<div class="content">
    <div class="item">
        <!-- <button class="btn-1"><img src="image/edit.png"></button>
        <button class="btn-1"><img src="image/delete.png"></button> -->

        <h4>
        <?= $d['username']?>
        </h4>
        <p>
          Full Name : <?= $d['fullname'] ?>
        </p>
        <p>Email : <?= $d['email']?></p>
        <p>Phone Number : <?= $d['no_hp']?></p>
        <a href="edit.php?id_user=<?= $d['id_user']?>" class="btn-1"><img src="image/edit.png"></a>
        <a href="admin.php?hapus=<?=$d['id_user'];?>" class="btn-1"><img src="image/delete.png"></a>

      </div>
      </div>
    <?php
		}
		?>
</body>
</html>
