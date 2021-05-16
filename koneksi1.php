<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database= "dbmahasiswa";

    $koneksi = new mysqli($servername, $username, $password, $database);

    if ($koneksi->connect_error) {
        die("Gagal mengkoneksikan" . $koneksi->connect_error);
    } else {
        echo "Berhasil Mengkoneksikan";
    }
?>