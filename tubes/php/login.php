<?php 
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
            // jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
        
            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
       }
    }   
    $error = true;
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
                        <div class="card-action grey darken-4 blue-text">
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
                        <button type="submit" name="submit" class="btn grey darken-4 blue-text">Login</button>
                        <button type="submit" class="btn grey darken-4">
                            <a href="../index.php" name="Kembali">Kembali</a>
                        </button>
                        <div class="registrasi">
                            <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>