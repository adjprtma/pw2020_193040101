<?php 
require 'functions.php';

if (isset($_POST["register"])) {

    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
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
    <title>Registrasi</title>
</head>
<body>
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card">
                <form action="" method="post">
                    <div class="card-panel">
                        <div class="card-action grey darken-4 blue-text">
                            <h5>Registrasi</h5>
                        </div>
                        <div class="input-field">
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="input-field">
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <button type="submit" name="register" class="btn grey darken-4 blue-text">REGISTER</button>
                        <button type="submit" class="btn grey darken-4">
                            <a href="login.php" name="Kembali">Kembali</a>
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>