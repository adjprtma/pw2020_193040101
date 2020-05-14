<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

if (!isset($_GET['id'])) {
    header("Location: admin.php");
    exit;
}

$id = $_GET['id'];
$hp = query("SELECT * FROM handphone WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
            </script>";
    }
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
    <title>Ubah</title>
</head>
<body>
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card">
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $hp['id']; ?>">
                    <div class="card-panel">
                        <div class="card-action grey darken-4 blue-text">
                            <h5>FORM UBAH DATA HANDPHONE</h5>
                        </div>
                        <div class="input-field">
                            <label for="gambar">Gambar :</label>
                            <input type="text" name="gambar" id="gambar" required value="<?= $hp['gambar']; ?>">
                        </div>
                        <div class="input-field">
                            <label for="tipe">Tipe :</label>
                            <input type="text" name="tipe" id="tipe" required value="<?= $hp['tipe']; ?>">
                        </div>
                        <div class="input-field">
                            <label for="processor">Processor :</label>
                            <input type="text" name="processor" id="processor" required value="<?= $hp['processor']; ?>">
                        </div>
                        <div class="input-field">
                            <label for="ram">Ram :</label>
                            <input type="text" name="ram" id="ram" required value="<?= $hp['ram']; ?>">
                        </div>
                        <div class="input-field">
                            <label for="rom">Rom :</label>
                            <input type="text" name="rom" id="rom" required value="<?= $hp['rom']; ?>">
                        </div>
                        <div class="input-field">
                            <label for="battery">Battery :</label>
                            <input type="text" name="battery" id="battery" required value="<?= $hp['battery']; ?>">
                        </div>
                        <div class="input-field">
                            <label for="harga">Harga :</label>
                            <input type="text" name="harga" id="harga" required value="<?= $hp['harga']; ?>">
                        </div>
                        <button type="submit" name="ubah" class="btn grey darken-4 blue-text">Ubah Data</button>
                        <button type="submit" class="btn grey darken-4">
                            <a href="admin.php" name="Kembali">Kembali</a>
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>