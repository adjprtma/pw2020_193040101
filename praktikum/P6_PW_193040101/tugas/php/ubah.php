<?php 
require 'functions.php';

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
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Ubah</title>
</head>
<body>
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card">
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $hp['id']; ?>">
                    <div class="card-panel">
                        <div class="card-action teal lighten-1 white-text">
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
                        <button type="submit" name="ubah" class="btn light-blue">Ubah Data</button>
                        <button type="submit" class="btn red">
                            <a href="admin.php" name="Kembali">Kembali</a>
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>