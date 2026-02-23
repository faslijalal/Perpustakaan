<?php 
session_start();

if (session_status() == PHP_SESSION_NONE){
    session_start();
}
$koneksi = mysqli_connect("localhost", "root", "", "db_perpustakaan");

//check

if (mysqli_connect_error()) {
    echo "failed to connect to Mysql :" . mysqli_connect_error();
}
?>