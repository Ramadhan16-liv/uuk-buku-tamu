<?php

$koneksi= mysqli_connect('localhost' , 'root' ,'', 'buku_tamu_sekolah');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}