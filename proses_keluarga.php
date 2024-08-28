<?php

include 'koneksi.php';

$id =$_POST['id'];
$nama_anggota =$_POST['nama_anggota'];
$alamat =$_POST['alamat'];
$tanggal_lahir =$_POST['tanggal_lahir'];

mysqli_query($koneksi, "insert into biodata values('$id', '$nama_anggota', '$alamat', '$tanggal_lahir')");

header("location:keluarga.php");

?>