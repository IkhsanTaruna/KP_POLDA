<?php 



//koneksi ke DBMS
include 'koneksi.php';
$lokasi2 = $_GET["lokasi"];
if(isset($_POST["submit"]) ){
//cek apakah data berhasil ditambahkan
        $lokasi = htmlspecialchars ($_POST["lokasi"]);
        $vpn = htmlspecialchars($_POST["vpn"]);
        $ip_cctv = htmlspecialchars($_POST["ip_cctv"]);
        $bw = htmlspecialchars($_POST["bw"]);
    

        $query = " UPDATE subbid_tekkom.cctv SET
        lokasi = '$lokasi',
        vpn = '$vpn',
        ip_cctv = '$ip_cctv',
        bw = '$bw'
            WHERE lokasi = '$lokasi2'
        ";
        mysqli_query($koneksi, " $query");
        var_dump(mysqli_affected_rows($koneksi));
        $lokasi2 = $lokasi;

}
$wifi = mysqli_query($koneksi,"SELECT * FROM subbid_tekkom.cctv WHERE  lokasi = '$lokasi2' " );
$row = mysqli_fetch_array($wifi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Wifi</title>
    <link rel="stylesheet" type="text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <style>
        label{
            display: block;
        }
    
    </style>
</head>
<body>
<div class="container">
        <h1>Ubah Data CCTV</h1>

        <form action="?lokasi=<?= $_GET['lokasi'] ?>" method="post" >
            <ul>
                
                    <label for="lokasi">Lokasi :</label>
                    <input type="text" name="lokasi" id="lokasi" value = "<?= $row['lokasi'] ?>" >
                
                <br>
                
                <label for="vpn">VPN :</label>
                    <input type="text" name="vpn" id="vpn" value = "<?= $row['vpn'] ?>">
                
                <br>
                
                <label for="ip_cctv">IP CCTV :</label>
                    <input type="text" name="ip_cctv" id="ip_cctv" value = "<?= $row['ip_cctv'] ?>">
                
                <br>
                
                <label for="bw">BW  :</label>
                    <input type="text" name="bw" id="bw" value = "<?= $row['bw'] ?>">
                
                <br>
                <br>
                    <button type="submit" name="submit">Tambah Data</button>
                
            </ul>
        
        
        </form>
        <a href="index.php">Kembali Ke menu</a>
        <br>
        <a href="tabelcctv.php">Kembali ke Tabel CCTV</a>
    </div>
</body>
</html>