<?php
//$server = "localhost";
//$username = "wwwkampu_kmc";
//$password = "pirate00";
//$database = "wwwkampu_lokomedia2";

$server = "localhost";
$username = "wwwcadia_root";
$password = "pirate00";
$database = "wwwcadia_galenika";



// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
