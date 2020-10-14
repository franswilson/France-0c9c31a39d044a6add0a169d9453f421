<?php
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
// menginput data ke database
mysqli_query($config, "insert into user values('','$username','$password')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
