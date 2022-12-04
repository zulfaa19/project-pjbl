<?php

$username =$_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password1 = $_POST['pass1'];
$level = "user"; 

//cek keamanan password
if($password1){
    include "koneksi.php";

    //perlu dibuat pengacak
    $pengacak= 'p3ng4c4k';

    //mengenskripsi password dengan md5 dan pengacak
    $passmd = md5($pengacak . md5($password1));

    //menyimpan username dan password terenskripsi ke database
    $query ="INSERT INTO tb_user VALUES('$username','$nama','$email','$passmd','$level')";
    $hasil = mysqli_query($db_koneksi, $query);

    //menampilkan status pendaftaran
    if($hasil) echo "user sudah berhasil terdaftar<br>";
    else echo "username sudah ada yang memiliki";
}else echo "password yang dimasukkan tidak sama";
echo "<a href='login.php'>Login Disini</a>";
?>