<?php
session_start();

//Membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","db_pts");

//membuat Kategori Baru

if(isset($_POST['addnewkategori'])){
    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama'];
    $id_tipskategori = $_POST['id_tipskategori'];

    $addnewkategori = mysqli_query($conn, "INSERT into tbl_kategori (id_kategori, nama, id_tipsloker) values('$id_kategori','$nama',$id_tipsloker')");
    if($addnewkategori){
        header('location:kategori.php');
    }else{
        echo 'Gagal Menambahkan Kategori';
        header('location:kategori.php');
    }
}
?>