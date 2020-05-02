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
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="../js/materialize.min.js"></script>

    <!-- my CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>ADJI*PHONE-SHOP</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="grey darken-4">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">ADJI*PHONE-SHOP</a>
        </div>
    </nav>

    <!-- Data -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/img/2.jpg">
                <div class="caption center-align">
                  <hr>
                  <h3>SELAMAT DATANG DI ADJI*PHONE-SHOP</h3>
                  <h5 class="light grey-text text-lighten-3">Katalog Produk</h5>
                  <hr>
                </div>
            </li>
            <li>
                <img src="assets/img/1.jpg">
                <div class="caption center-align">
                  <hr>
                  <h3>SELAMAT DATANG DI ADJI*PHONE-SHOP</h3>
                  <h5 class="light grey-text text-lighten-3">Katalog Produk</h5>
                  <hr>
                </div>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <form action="" methode="get">
                    <input type="text" name="keyword" autofocus>
                    <button type="submit" name="cari" class="btn teal">Cari</button>
                </form>
            </div>
        </div>
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
    <a href="php/login.php"><button type="submit" class="btn teal">Masuk Ke Halaman Admin</button></a>
    </div>
    
    <!-- footer -->
    <footer class="grey darken-4 white-text center">
        <p class="flow-text">Copyright 2020 | Code by <a href="http://instagram.com/adjprtma_">adjprtma_</a></p>
    </footer>
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const slider = document.querySelectorAll('.slider');
          M.Slider.init(slider,{
              indicators: false,
              height: 700,
              transition: 600,
              interval: 3000
          });
    </script>
</body>
</html>