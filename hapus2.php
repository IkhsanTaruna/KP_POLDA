<?php
include "koneksi.php";
$lokasi = $_GET["lokasi"];
mysqli_query($koneksi, "DELETE FROM cctv WHERE lokasi = '$lokasi'");
header("location: tabelcctv.php");
?>