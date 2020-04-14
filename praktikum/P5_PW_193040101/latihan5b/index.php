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
    <title>Latihan 5b</title>
</head>
<body>
    <div class="centered">
        <div class="container">
        <h1>ADJI*PHONE-SHOP</h1>
            <table border="1" cellpadding="10" cellspacing="1">
                <tr>
                    <th>NO</th>
                    <th>GAMBAR</th>
                    <th>TYPE</th>
                    <th>PROCESSOR</th>
                    <th>RAM</th>
                    <th>ROM</th>
                    <th>BATTERY</th>
                    <th>HARGA</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($handphone as $hp) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><img src="assets/img/<?= $hp["gambar"] ?>"></td>
                    <td><?= $hp["type"] ?></td>
                    <td><?= $hp["processor"] ?></td>
                    <td><?= $hp["ram"] ?></td>
                    <td><?= $hp["rom"] ?></td>
                    <td><?= $hp["battery"] ?></td>
                    <td><?= $hp["harga"] ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>