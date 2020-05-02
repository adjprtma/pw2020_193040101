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
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="../js/materialize.min.js"></script>

    <!-- my CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
     <!-- Navbar -->
     <nav class="grey darken-4">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">ADJI*PHONE-SHOP</a>
        </div>
    </nav>

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
        <button class="tombol-kembali"><a href="../index.php">KEMBALI</a></button>
    </div>

     <!-- footer -->
     <footer class="grey darken-4 white-text center">
        <p class="flow-text">Copyright 2020 | Code by <a href="http://instagram.com/adjprtma_">adjprtma_</a></p>
    </footer> 
</body>
</html>