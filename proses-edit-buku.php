<?php

$id_tamu = $_GET['id_tamu'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$asal = $_POST['asal'];
$pekerjaan = $_POST['pekerjaan'];
$keperluan = $_POST['keperluan'];

include'koneksi.php';
$sql = "UPDATE user SET nama='$nama', no_telp='$no_telp', asal='$asal', pekerjaan='$pekerjaan', keperluan='$keperluan' WHERE id_tamu='$id_tamu'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=buku");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=buku');
    </script>";
}