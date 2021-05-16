<!DOCTYPE html>
<html>
<head>
    <title>Tampil DataBase</title>
</head>
<body>
    <h1 align="center">Database</h1>
    
    <table border="10" align="center">
        <thead>
            <tr>
                <th>nim</th>
                <th>nama</th>
                <th>email</th>
                <th>pw</th>
            </tr>
        </thead>
        
        <?php
            include "koneksi1.php";
            $ambildata = mysqli_query($koneksi, "SELECT * FROM tbkelompok ");
            while($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <tr>
                    <td> $tampil[nim]</td>
                    <td> $tampil[nama]</td>
                    <td> $tampil[email]</td>
                    <td> $tampil[pw]</td>
                </tr>";
            }
        ?>
        
    </table>

    <p>Klik <a href="from_inputdb.php" target = "_blank">Disini</a>Untuk Menambahkan Data</p>

</body>
</html>