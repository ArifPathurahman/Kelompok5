<?php
ob_start();
session_start();
require 'koneksi1.php';
$nim = $_POST['idnim'];
$nama = $_POST['idnama'];
$email = $_POST['idemail'];
$pw = $_POST['idpw'];

if($nim=="" and $nama=="" and $email=="" and $pw==""){
    echo "Data Belum Diisi ";
}elseif($nim==""){
    echo "Nim belum diisi";
}elseif($nama==""){
    echo "Nama belum diisi";
}elseif($email==""){
    echo "Email belum diisi";
}elseif($pw==""){
    echo "Password belum diisi";
}
else{
    $sql = "INSERT into tbkelompok(nim,nama,email,pw)VALUES('$nim','$nama','$email','$pw')";
    $result = $koneksi->query($sql);
    header("Location: index.php");
}
?>
