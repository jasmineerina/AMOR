<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="detail.css">

    <!-- my js -->
    <script src="detail.js"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

    <title> Amor-Detail Info</title>
</head>
<body>
    <!-- navbar -->
    <div class="nav-bar">
        <button class="openbtn" onclick="openNav()">☰</button>
        <a>Amor</a>
    </div>

      <!-- sidebar -->
    <div class="wrapper">
        <div id="mySidebar" class="sidebar">
              <ul>
                  <button class="closebtn" onclick="closeNav()">×</button>
                  <p id="jud">Amor</p>
                  <li><a href="home.php">Home</a></li>
                  <li><a href="shipping.php">Shipping</a></li>
                  <li><a href="Tracking.php">Tracking</a></li>
                  <li><a href="history.php">History</a></li>
                  <li><a href="history.php">CS</a></li>
                  <li><a href="landingpage.php">Log out</a></li>
              </ul>
          </div>
    </div>
    <!-- main content -->
    <div class="header">
      <?php
      include 'koneksi/koneksi.php';
      $id = $_GET['id_shipping'];
//      $no_order = $_GET['no_order'];
      $data = mysqli_query($koneksi,"select * from shipping where id_shipping='$id'");
      while ($d = mysqli_fetch_array($data)) {

       ?>
    <div class="card">
        <div class="row">
            <button class="button button1"><p style="text-align:center">Detail Info</p></button><button class="button" onclick="location.href='tracking.php'" type="button"><p style="text-align:center">Track Info</p></button>
        </div>
        <div class="status">
            <div class=""><span id="heading">Kode: </span><span id="bold"><?= $d['no_order']?></span>
            </div>
        </div>
        <div class="info">
            <div class="detail">
                <p class="nama" style="float: left;"> <span id="heading">Jenis Barang : </span> </p>
                <p class="nama" style="float: right;"> <span id="heading">Daster</span></p>
            </div>
        </div>
        <div class="info">
            <div class="detail">
                <p class="nama" style="float: left;"> <span id="heading">Berat :</span> </p>
                <p class="nama" style="float: right;"> <span id="heading">1 Kg</span></p>
            </div>
        </div>
        <div class="info">
            <div class="detail">
                <p class="nama" style="float: left;"> <span id="heading">Asuransi :</span> </p>
                <p class="nama" style="float: right;"> <span id="heading">Yes</span></p>
            </div>
        </div>
        <div class="info">
            <div class="detail">
                <p class="nama" style="float: left;"> <span id="heading">Metode Pembayaran</span> </p>
                <p class="nama" style="float: right;"> <span id="heading">E-money</span></p>
            </div>
        </div>
        <div class="info">
            <div class="total">
                <p class="nama" style="float: center;"> <span id="total">Total : IDR 33.000</span> </p>
            </div>
        </div>
    </div>
    <?php
}
     ?>
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
