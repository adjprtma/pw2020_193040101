<?php 
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

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
    <link rel="stylesheet" href="./css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="./js/materialize.min.js"></script>

    <!-- my CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ADJI*PHONE-SHOP</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="grey darken-4">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">ADJI*PHONE-SHOP</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="php/login.php">Login/Masuk</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="php/login.php">Login/Masuk</a></li>
    </ul>

    <!-- Data -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/img/1.jpg">
                <div class="caption center-align">
                  <h3>Selamat Datang Di ADJI*PHONE-SHOP</h3>
                  <hr>
                  <h5 class="light grey-text text-lighten-3">Penjualan Handphone Terbaik</h5>
                </div>
            </li>
            <li>
                <img src="assets/img/2.jpg">
                <div class="caption center-align">
                  <h3>Cari Handphone Di ADJI*PHONE-SHOP Saja?</h3>
                  <hr>
                  <h5 class="light grey-text text-lighten-3">Kualitas Dan Harga Terjamin</h5>
                </div>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <form action="" methode="get">
                    <h5>Silahkan Cari Katalog Produk</h5>
                    <i class="material-icons">phone_iphone</i>
                    <input type="text" name="keyword" autofocus id="keyword">
                    <button type="submit" name="cari" class="btn teal" id="tombol-cari">Cari</button>
                </form>
            </div>
        </div>
        <div id="container">
            <?php if(empty($handphone)) : ?>
                <tr>
                    <td colspan="9">
                        <h1>Data Tidak Ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php foreach ($handphone as $hp) : ?>
                    <p class="tipe">
                        <div class="collection">
                        <a href="php/detail.php?id=<?= $hp['id'] ?>"class="collection-item">
                            <?= $hp["tipe"] ?>
                        </a>
                        </div>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- footer -->
    <footer class="grey darken-4 white-text center">
        <p class="flow-text">Copyright 2020 | Code by <a href="http://instagram.com/adjprtma_">adjprtma_</a></p>
    </footer>
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sideNav);
    </script>
    <script>
        const slider = document.querySelectorAll('.slider');
          M.Slider.init(slider,{
              indicators: false,
              height: 700,
              transition: 600,
              interval: 3000
          });
    </script>
    <script src="js/ajaxindex.js"></script>
</body>
</html>