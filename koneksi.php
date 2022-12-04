<?php 
//koneksi ke database
$host = "localhost";
$user = "root";
$password= "";
$database= "db_pts";
$db_koneksi= mysqli_connect($host, $user,$password, $database);
if(!$db_koneksi){
    echo "KONEKSI DATABASE GAGAL";
}