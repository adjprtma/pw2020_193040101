<?php 
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $row['id'];
        }
        if ($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
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
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card">
                <form action="" method="post">
                    <?php if (isset($error)) : ?>
                        <p style="color: red; font-style: italic;">Username atau Password salah</p>
                    <?php endif; ?>
                    <div class="card-panel">
                        <div class="card-action light-blue lighten-1 white-text">
                            <h5>Login</h5>
                        </div>
                        <div class="input-field">
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="input-field">
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="remember">
                            <label for="remember">
                                <input type="checkbox" name="remember" id="remember" />
                                <span>Remember Me</span>
                            </label>
                        </div>
                        <button type="submit" name="submit" class="btn light-blue">Login</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>