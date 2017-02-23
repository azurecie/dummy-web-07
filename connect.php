<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "bf6731ccaa0648";
$pass = "ab4d458c";
$name = "distasweb";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
