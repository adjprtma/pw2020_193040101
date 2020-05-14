<?php 
    // Mengecek apakah ada id yang dikirimkan
    // Jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }
    
    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET['id'];

    // Melakukan query dengan parameter id yang diambil dari url
    $handphone = query("SELECT * FROM handphone WHERE id = $id")[0];
?>




<!DOCTYPE html>
<html>
<head>
    <title>Detail</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="../js/materialize.min.js"></script>

    <!-- my CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
     <!-- Navbar -->
     <nav class="grey darken-4">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">ADJI*PHONE-SHOP</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="../index.php">Home/Halaman Utama</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="../index.php">Home/Halaman Utama</a></li>
    </ul>

    <!-- Data -->
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $handphone["gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p>TIPE : <?= $handphone["tipe"]; ?></p>
            <p>PROCESSOR : <?= $handphone["processor"]; ?></p>
            <p>RAM : <?= $handphone["ram"]; ?></p>
            <p>ROM : <?= $handphone["rom"]; ?></p>
            <p>BATTERY : <?= $handphone["battery"]; ?></p>
            <p>HARGA : RP.<?= $handphone["harga"]; ?></p>
        </div>
        <a href="../index.php" name="Kembali"><button type="submit" class="btn red">Kembali</button></a>
    </div>

     <!-- footer -->
     <footer class="grey darken-4 white-text center">
        <p class="flow-text">Copyright 2020 | Code by <a href="http://instagram.com/adjprtma_">adjprtma_</a></p>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sideNav);
    </script> 
</body>
</html>