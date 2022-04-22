<?php 



//koneksi ke DBMS
include 'koneksi.php';
$lokasi2 = $_GET["lokasi"];
if(isset($_POST["submit"]) ){
//cek apakah data berhasil ditambahkan
        $lokasi = htmlspecialchars ($_POST["lokasi"]);
        $nama_provider = htmlspecialchars($_POST["nama_provider"]);
        $kecepatan = htmlspecialchars($_POST["kecepatan"]);
        $nowifi = htmlspecialchars($_POST["nowifi"]);
    

        $query = " UPDATE subbid_tekkom.wifi SET
        lokasi = '$lokasi',
        nama_provider = '$nama_provider',
        kecepatan = '$kecepatan',
        nowifi = '$nowifi'
            WHERE lokasi = '$lokasi2'
        ";
        mysqli_query($koneksi, " $query ");
        var_dump(mysqli_affected_rows($koneksi));
        $lokasi2 = $lokasi;

}
$wifi = mysqli_query($koneksi,"SELECT * FROM subbid_tekkom.wifi WHERE  lokasi = '$lokasi2' " );
$row = mysqli_fetch_array($wifi);
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
        <h1>Ubah Data WIFI</h1>

        <form action="?lokasi=<?= $_GET['lokasi'] ?>" method="post" >
            <ul>
                <li>
                    <label for="lokasi">Lokasi :</label>
                    <input type="text" name="lokasi" id="lokasi" value = "<?= $row['lokasi'] ?>" >
                </li>
                <br>
                <li>
                <label for="nama_provider">Nama Provider :</label>
                    <input type="text" name="nama_provider" id="nama_provider" value = "<?= $row['nama_provider'] ?>">
                </li>
                <br>
                <li>
                <label for="kecepatan">Kecepatan :</label>
                    <input type="text" name="kecepatan" id="kecepatan" value = "<?= $row['kecepatan'] ?>">
                </li>
                <br>
                <li>
                <label for="nowifi">Nomor Wifi :</label>
                    <input type="text" name="nowifi" id="nowifi" value = "<?= $row['nowifi'] ?>">
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