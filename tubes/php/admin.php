<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
} 
    // menghubungkan dengan file php lainnya
    require 'functions.php';

    // melakukan query
    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $handphone = query("SELECT * FROM handphone WHERE
            tipe LIKE '%$keyword%' OR
            processor LIKE '%$keyword%' OR
            ram LIKE '%$keyword%' OR
            rom LIKE '%$keyword%' OR
            battery LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' ");
    } else {
        $handphone = query("SELECT * FROM handphone");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Admin</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="grey darken-4">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">ADJI*PHONE-SHOP</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="logout.php">Logout/Keluar</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="logout.php">Logout/Keluar</a></li>
    </ul>

    <!-- Data -->
    <div class="centered">
        <div class="container">
            <h1>HALAMAN ADMIN<i class="material-icons medium">phone_iphone</i></h1>
            <div class="row">
                <div class="col s12 m4 offset-m4">
                    <form action="" methode="get">
                        <input type="text" name="keyword" autofocus id="keyword">
                        <button type="submit" name="cari" class="btn teal" id="tombol-cari">Cari</button>
                    </form>
                </div>
            </div>
            <div class="add">
                <a href="tambah.php"><button type="submit" class="btn green">Tambah Data</button></a>
            </div>
            <div id="container">
                <table border="1" cellpadding="10" cellspacing="1">
                    <tr>
                        <th>NO</th>
                        <th>OPSI</th>
                        <th>GAMBAR</th>
                        <th>TIPE</th>
                        <th>PROCESSOR</th>
                        <th>RAM</th>
                        <th>ROM</th>
                        <th>BATTERY</th>
                        <th>HARGA</th>
                    </tr>
                    <?php if(empty($handphone)) : ?>
                        <tr>
                            <td colspan="9">
                                <h1>Data Tidak Ditemukan</h1>
                            </td>
                        </tr>
                    <?php else : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($handphone as $hp) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $hp['id'] ?>"><button type="submit" class="btn light-blue">Ubah</button></a>
                                <a href="hapus.php?id=<?= $hp['id'] ?>" onclick="return confirm('Hapus Data??')"><button type="submit" class="btn red">Hapus</button></a>
                            </td>
                            <td><img src="../assets/img/<?= $hp["gambar"] ?>"></td>
                            <td><?= $hp["tipe"] ?></td>
                            <td><?= $hp["processor"] ?></td>
                            <td><?= $hp["ram"] ?></td>
                            <td><?= $hp["rom"] ?></td>
                            <td><?= $hp["battery"] ?></td>
                            <td><?= $hp["harga"] ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>
        </div>
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
    <script src="../js/ajaxadmin.js"></script>
</body>
</html>