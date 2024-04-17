<?php
date_default_timezone_set("America/New_York");
include 'koneksi/koneksi.php';


if(isset($_POST['submit'])){
  $id_uploader =  // gatau aku mau nangis
  $no_order ="AMR".date("ymdhis");
  $pengirim = $_POST['pengirim'];
  $penerima = $_POST['penerima'];
  $alamat = $_POST['alamat'];
  $tujuan = $_POST['tujuan'];
  $pickup = $_POST['pickup'];
  $jenis_barang = $_POST['jenis_barang'];
  $berat = $_POST['berat'];
  $no_hp = $_POST['no_hp'];
  $jenis_kendaraan = $_POST['jenis_kendaraan'];
  $insuransi = $_POST['insuransi'];
  $pembayaran = $_POST['pembayaran'];

  if($pengirim==null || $penerima==null || $alamat==null || $tujuan==null || $pickup==null || $jenis_barang==null || $berat==null || $no_hp==null || $jenis_kendaraan==null || $insuransi==null || $pembayaran==null ){
      echo "<script type='text/javascript'>alert('Data tidak boleh ada yang kosong');</script>";
  }
  else{
      mysqli_query($koneksi,"insert into shipping values('','$no_order' ,'$pengirim','$penerima','$alamat','$tujuan', '$pickup', '$jenis_barang', '$berat', '$no_hp', '$jenis_kendaraan', '$insuransi', '$pembayaran')");

      header("Location:tracking.php"); // nyambung tracking
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="shipping.css">
    <title>Amor-Shipping</title>

    <!-- my js -->
    <script src="shipping.js"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
      <div class="nav-bar">
      <button class="openbtn" onclick="openNav()">☰</button>
      <a>Amor</a>

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
                <li><a href="home.php">Log out</a></li>
            </ul>
        </div>
        <!-- main content -->
        <div id="main_content">
            <div class="header">Shipping</div>
            <div class="col-lg-10">
                <form action="" method="POST">
                    <div class="form-row">
			        <div class="form-group col-lg-6">
				    <label for="pengirim">Pengirim</label>
                    <input type="text" class="form-control" value="" id="pengirim" aria-describedby="emailHelp" placeholder="Pengirim" name="pengirim">
                    </div>
                <div class="form-group col-md-6">
				    <label for="penerima">Penerima</label>
                    <input type="text" class="form-control" id="penerima" aria-describedby="emailHelp" placeholder="Penerima" name="penerima">
                </div>
                <div class="form-group col-md-6">
        			<span class="form-label" for="pickup">Alamat pickup</span>
        			<input class="form-control" type="text" placeholder="masukkan alamat" id="alamat" name="alamat">
                </div>
                <div class="form-group col-md-6">
        			<span class="form-label" for="tujuan">Tujuan</span>
        			<input class="form-control" type="text" placeholder="masukkan alamat" id="tujuan" name="tujuan">
        		</div>
                <!-- <div class="row"> -->
                    <div class="col-sm-3">
                        <div class="form-group">
                        <span class="form-label" for="pickup">Pickup Date</span>
                        <input class="form-control" type="date" required id="pickup" name="pickup">
                        </div>
                    </div>
                <div class="form-group col-md-4">
    				<span class="form-label" for="jenis_barang">Jenis Barang</span>
    				<input class="form-control" type="text" placeholder="Masukkan jenis barang" id="jenis_barang" name="jenis_barang">
    			</div>
                <div class="form-group col-md-2">
    				<span class="form-label" for="berat">Berat</span>
    				<input class="form-control" type="text" placeholder="Berat Barang" id="berat" name="berat">
    			</div>
                <div class="form-group col-md-3">
                <span class="form-label" for="no_hp">Phone</span>
                <input class="form-control" type="tel" placeholder="Nomor HP Penerima" id="no_hp" name="no_hp">
             </div>
             <div class="row">
                <div class="form-group col-md-4" for="jenis_kendaraan">              <p>Jenis Kendaraan:</p>
  				    <!-- <div class="form-group col-md-6"> -->
  					<input type="radio" id="jenis_kendaraan" name="jenis_kendaraan" value="Mobil">
  					<label for="jenis_kendaraan">Mobil</label>
                    <input type="radio" id="jenis_kendaraan" name="jenis_kendaraan" value="Motor">
                    <label for="jenis_kendaraan">Motor</label>
                    </div>
                <!-- </div> -->
                <div class="form-group col-md-4">
                <p>Insuransi:</p>
                    <!-- <div class="form-group col-md-6"> -->
                    <input type="radio" id="insuransi" name="insuransi" value="Yes">
                    <label for="insuransi">Yes</label>
                    <input type="radio" id="insuransi" name="insuransi" value="No">
                    <label for="insuransi">No</label>
                    </div>
                <!-- </div> -->
                  <div class="form-group col-md-4">
                <p>Metode Pembayaran:</p>
                    <!-- <div class="form-group col-md-6"> -->
                    <input type="radio" id="pembayaran" name="pembayaran" value="E-Money">
                    <label for="pembayaran">E-Money</label>
                    <input type="radio" id="pembayaran" name="pembayaran" value="Cash">
                    <label for="pembayaran">Cash</label>
                    </div>
                <!-- </div> -->
                <div class="form-btn">
					<button type="submit" class="submit-btn" value="Book Now" name="submit">Book Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </body>
</html>
