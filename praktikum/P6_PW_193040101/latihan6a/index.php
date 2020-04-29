<?php 
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $handphone = query("SELECT * FROM handphone")
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

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
    <div class="container">
        <?php foreach ($handphone as $hp) : ?>
            <p class="tipe">
                <div class="collection">
                    <a href="php/detail.php?id=<?= $hp['id'] ?>"class="collection-item">
                        <?= $hp["tipe"] ?>
                    </a>
                </div>
            </p>
        <?php endforeach; ?>
    </div>

    <!-- footer -->
    <footer class="grey darken-4 white-text center">
        <p class="flow-text">Copyright 2020 | Code by <a href="http://instagram.com/adjprtma_">adjprtma_</a></p>
    </footer>   
</body>
</html>