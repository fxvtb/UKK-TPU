<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_spp";

// koneksi dan memilih database di server
$koneksi = mysqli_connect($server,$username,$password,$database);

if (!$koneksi) { // jka tidak terkoneksi maka tampil error
	die ("koneksi ke database gagal: " .mysql_connect_error());
	}
?>