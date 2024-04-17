<!DOCTYPE html>
<?php
include 'koneksi/koneksi.php';
if(isset($_GET['lihat'])){
  $id_shipping = $_GET['lihat'];
  mysqli_query($koneksi,"select from shipping where id_shipping='$id_shipping'");
  header("location:history2.php");
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
    <link rel="stylesheet" href="history.css">
    <title>Amor-History</title>

    <!-- my js -->
    <script src="history.js"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

  </head>
  <body>
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
                <li><a href="cs.php">CS</a></li>
                <li><a href="landingpage.php">Log out</a></li>
            </ul>
        </div>

        <!-- main content -->


        <div id="main_content">
            <div class="header">History</div>
            <?php
            $data = mysqli_query($koneksi,"select * from shipping");
            while($d = mysqli_fetch_array($data)){
            ?>
            <div class="content">
              <div class="item">

                <h4> <?= $d['no_order'] ?> </h4>

                <a href="history2.php?id_shipping=<?= $d['id_shipping']?>" class="drop-btn">  <img src="image/download.png"  alt="down" class="dropdown">
                </a>

                <p>
                  Pick up date : <?= $d['tgl_pickup']?>
                </p>

              </div>
              <!-- <div class="item"><h4 href="#">B3282<button class="drop-btn" onclick="location.href='history2.html'"><img src="image/download.png" alt="down" class="dropdown"></button></h4>
                <h6>10/10/2020</h6>
              </div>
              <div class="item"><h4 href="#">A3283<button class="drop-btn" onclick="location.href='history2.html'"><img src="image/download.png" alt="down" class="dropdown"></button></h4>
                <h6>12/9/2020</h6>
              </div> -->
            </div>
            <?php
          }
             ?>
        </div>
    </div>
    </div>
  </body>
</html>
