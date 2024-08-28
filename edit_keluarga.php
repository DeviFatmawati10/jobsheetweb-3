<?php

include 'koneksi.php';

$id =$_POST['id'];
$nama_angota =$_POST['nama_anggota'];
$alamat =$_POST['alamat'];
$tanggal_lahir =$_POST['tanggal_lahir'];

$edit = "UPDATE biodata SET id_anggota= '$id', nama_anggota= '$nama_anggota', alamat= '$alamat', tanggal_lahir= '$tanggal_lahir' WHERE id_anggota = $id";

header("location:keluarga.php")
?>