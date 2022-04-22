<?php 



//koneksi ke DBMS
include 'koneksi.php';

if(isset($_POST["submit"]) ){
//cek apakah data berhasil ditambahkan
        $lokasi = htmlspecialchars ($_POST["lokasi"]);
        $nama_provider = htmlspecialchars($_POST["nama_provider"]);
        $kecepatan = htmlspecialchars($_POST["kecepatan"]);
        $nowifi = htmlspecialchars($_POST["nowifi"]);
    

        $query = " INSERT INTO subbid_tekkom.wifi
        VALUES
        ('$lokasi', '$nama_provider', '$kecepatan', '$nowifi')
         ";
        mysqli_query($koneksi, " $query ");



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Wifi</title>

    <style>
        label{
            display: block;
        }
    
    </style>
</head>
<body>
        <h1>Tambah Data WIFI</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="lokasi">Lokasi :</label>
                    <input type="text" name="lokasi" id="lokasi">
                </li>
                <br>
                <li>
                <label for="nama_provider">Nama Provider :</label>
                    <input type="text" name="nama_provider" id="nama_provider">
                </li>
                <br>
                <li>
                <label for="kecepatan">Kecepatan :</label>
                    <input type="text" name="kecepatan" id="kecepatan">
                </li>
                <br>
                <li>
                <label for="nowifi">Nomor Wifi :</label>
                    <input type="text" name="nowifi" id="nowifi">
                </li>
                <br>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>
        
        
        </form>
        <a href="index.php">Kembali Ke menu</a>
        <a href="tablewifi.php">Kembali ke Tabel Wifi</a>
</body>
</html>