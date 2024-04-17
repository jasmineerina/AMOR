<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

        <title>Amor-Tracking</title>
        <link rel="stylesheet" type="text/css" href="tracking.css">
        <script src="tracking.js"></script>
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
                <li><a href="history.php">CS</a></li>
                <li><a href="landingpage.php">Log out</a></li>
            </ul>
        </div>

    <!-- form tracking -->
    <div class="info">
        <div class="title">
            <div class="row">
                <button class="button button2" onclick="location.href='detail.php'" type="button"><p style="text-align:center">Detail Info</p></button><button class="button button1"><p style="text-align:center">Track Info</p></button>
            </div>
            <div class="details">
                <span id="heading">Nama kurir:</span><br> <span id="details">Bambang</span> </div>
            <div class="kanan"> <span id="heading">Order No:</span><br> <span id="details"> </span>
            </div>
        </div>
    <div class="pricing">
        <ul id="progressbar">
            <li class="step0 active " id="step1">Order Confirmed</li>
            <li class="step0 active text-center" id="step2">Picked By Courier</li>
            <li class="step0 active text-right " id="step3">On the way</li>
            <li class="step0 actives" id="step4">Delivered</li>
        </ul>
    </div>
        <div class="row">
            <div class="contact">Ingin bantuan? Mohon&nbsp; <a href="contactus.php" id="link">Contact Us</a></div>
            <div class="row">
            <p style="text-align:center"><button class="buttons"><a href="feedback.php">PAKET TELAH DITERIMA</a></button>
        </div>
        </div>
</div>
<!-- akhir form tracking -->

</body>
</html>
