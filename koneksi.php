<?php

$koneksi = mysqli_connect("localhost","root","","keluarga_devi");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : ". mysqli_connect_errno();
}
?>