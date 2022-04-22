<?php
include "koneksi.php";
$lokasi = $_GET["lokasi"];
mysqli_query($koneksi, "DELETE FROM wifi WHERE lokasi = '$lokasi'");
header("location: tablewifi.php");
?>