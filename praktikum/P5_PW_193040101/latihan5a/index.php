<?php 
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost","root","") or die ("koneksi ke DB gagal");

    // Memilih database
    mysqli_select_db($conn, "tubes_193040101") or die ("Database salah!");

    // query mengambil objek dari table didalam database
    $result = mysqli_query($conn, "SELECT * FROM handphone");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Latihan 5a</title>
</head>
<body>
    <div class="container">
      <h1>DAFTAR HARGA HP IPHONE</h1>
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
                <td><?= $row["type"];?></td>
                <td><?= $row["processor"];?></td>
                <td><?= $row["ram"];?></td>
                <td><?= $row["rom"];?></td>
                <td><?= $row["battery"];?></td>
                <td><?= $row["harga"];?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>