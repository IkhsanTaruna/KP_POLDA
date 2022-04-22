<?php

//host web server 
$host = "localhost";
// username untuk mengakses database
$username = "root";
// password untuk mengakses database
$pass = "";
// database yang digunakan
$database = "subbid_tekkom";
//script untuk koneksi ke databsae
 $koneksi = mysqli_connect($host,$username,$pass,$database);
 //untuk mengecek error
 //var_dump(mysqli_connect_error());
?>