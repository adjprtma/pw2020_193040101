<?php 
    // function untuk melakukan koneksi ke database
    function koneksi() {
        $conn = mysqli_connect("localhost","root","") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040101") or die ("Database salah!");

        return $conn;
    }

    // function untuk melakukan query ke database
    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn , "$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    // Fungsi untuk menambahkan data di dalam database
    function tambah($data)
    {
        $conn = koneksi();

        $gambar = htmlspecialchars($data['gambar']);
        $tipe = htmlspecialchars($data['tipe']);
        $processor = htmlspecialchars($data['processor']);
        $ram = htmlspecialchars($data['ram']);
        $rom = htmlspecialchars($data['rom']);
        $battery = htmlspecialchars($data['battery']);
        $harga = htmlspecialchars($data['harga']);

        $query = "INSERT INTO handphone
                        VALUES
                        ('','$gambar','$tipe','$processor','$ram','$rom','$battery','$harga')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>