<?php 



//koneksi ke DBMS
include 'koneksi.php';

if(isset($_POST["submit"]) ){
//cek apakah data berhasil ditambahkan
        $lokasi = htmlspecialchars ($_POST["lokasi"]);
        $vpn = htmlspecialchars($_POST["vpn"]);
        $ip_cctv = htmlspecialchars($_POST["ip_cctv"]);
        $bw = htmlspecialchars($_POST["bw"]);
    

        $query = " INSERT INTO subbid_tekkom.cctv
        VALUES
        ('$lokasi', '$vpn', '$ip_cctv', '$bw')
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
                <label for="vpn">VPN :</label>
                    <input type="text" name="vpn" id="vpn">
                </li>
                <br>
                <li>
                <label for="ip_cctv">IP CCTV :</label>
                    <input type="text" name="ip_cctv" id="ip_cctv">
                </li>
                <br>
                <li>
                <label for="bw">Bandwitch :</label>
                    <input type="text" name="bw" id="bw">
                </li>
                <br>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>
        
        
        </form>
        <a href="index.php">Kembali Ke menu</a>
        <a href="tabelcctv.php">Kembali ke Tabel CCTV</a>
</body>
</html>