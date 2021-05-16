<!DOCTYPE html>
<html>
<head>
    <title>Ini Buat Input</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 20px;">
<h3> TAMBAH SESUKA HATI </h3>
<form action="info.php" method="POST">

    <div class="form-group">
        <label for="exampleInputEmail1">NIM</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="idnim">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">NAMA</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="idnama">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">EMAIL</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="idemail">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">PASSWORD</label>
        <input type="password" class="form-control" id="exampleInputEmail1" name="idpw">
    </div>
    <button type="submit" class="btn btn-primary" value="Save" name="proses">Submit</button>
</form>


<?php
include "koneksi1.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into tbkelompok set
    nim = '$_POST[idnim]',
    nama = '$_POST[idnama]',
    email = '$_POST[idemail]'),
    pw = '$_POST[idpw]'");

    echo "Data Berhasil Tersimpan";
}
?>

</div>
</body>
</html>
