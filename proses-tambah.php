<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
   
    $kendaraan=$_POST['kendaraan'];
    $jam=$_POST['jam'];

    $sql = "INSERT INTO tb_pasien(kendaraan, jam) VALUES ('$kendaraan', '$jam')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tabel.php?status=sukses');
    }else{
        header('location:tabel.php?status=gagal');
    }
}
?>