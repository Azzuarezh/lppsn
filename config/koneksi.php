<?php
//1	k4095283_dbina	k4095283_dbroot	pirate00
//$server = "localhost";
//$username = "wwwkampu_kmc";
//$password = "pirate00";
//$database = "wwwkampu_lokomedia2";
/*
$server = "localhost";
$username = "k4095283_dbroot";
$password = "pirate00";
$database = "k4095283_dbina";
*/
// Koneksi dan memilih database di server
//$server = "sql204.byethost14.com";
//$username = "b14_15421161";
//$password = "123456";
//$database = "b14_15421161_inablues";
$server = "localhost";
$username = "root";
$password = "";
$database = "db_lppsn";
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
