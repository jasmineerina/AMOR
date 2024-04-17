<!DOCTYPE html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="history2.css">

    <!-- my js -->
    <script src="history2.js"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

    <title> Amor-Detail Info</title>
</head>
<body>
    <!-- main content -->
    <div class="header">
      <?php
      include 'koneksi/koneksi.php';
      $id = $_GET['id_shipping'];
//      $no_order = $_GET['no_order'];
      $data = mysqli_query($koneksi,"select * from shipping where id_shipping='$id'");
      while ($d = mysqli_fetch_array($data)) {

       ?>

        <div class="content">
            <button class="drop-btn" onclick="location.href='history.php'" ><img src="image/download.png" alt="down" class="dropdown"></button>
            <div class="status">
                <div class=""><span id="heading">Kode:  </span><span id="bold" > <?= $d['no_order']?> </span>

                </div>
            </div>
            <div class="info">
                <div class="detail">
                    <p class="nama" style="float: left;" value="<?= $d['penerima']?>"> <span id="heading">Penerima : </span> </p>
                    <p class="nama" style="float: right;"> <?= $d['penerima']?> <span id="heading" ></span></p>
                </div>
            </div>
            <div class="info">
                <div class="detail">
                    <p class="nama" style="float: left;"> <span id="heading">Tujuan : </span> </p>
                    <p class="nama" style="float: right;"> <?= $d['tujuan']?> <span id="heading"></span></p>
                </div>
            </div>
            <div class="info">
                <div class="detail">
                    <p class="nama" style="float: left;"> <span id="heading">Jenis Barang : </span> </p>
                    <p class="nama" style="float: right;"> <?= $d['jenis_brg']?> <span id="heading"></span></p>
                </div>
            </div>
            <div class="info">
                <div class="detail">
                    <p class="nama" style="float: left;"> <span id="heading">Berat :</span> </p>
                    <p class="nama" style="float: right;"> <?= $d['berat']?> <span id="heading"></span></p>
                </div>
            </div>
            <div class="info">
                <div class="detail">
                    <p class="nama" style="float: left;"> <span id="heading">Asuransi :</span> </p>
                    <p class="nama" style="float: right;"> <?= $d['asuransi']?> <span id="heading"></span></p>
                </div>
            </div>
            <div class="info">
                <div class="detail">
                    <p class="nama" style="float: left;"> <span id="heading">Metode Pembayaran</span> </p>
                    <p class="nama" style="float: right;"> <?= $d['pembayaran']?> <span id="heading"></span></p>
                </div>
            </div>
            <div class="info">
                <div class="total">
                    <p class="nama" style="float: center;"> <span id="total">Total : IDR 15.000</span> </p> <!-- default ajalah -->
                </div>
            </div>
    </div>
    <?php
  }
     ?>
    </div>

</body>
</html>
