<?php
$koneksi=mysqli_connect("localhost","root","","login_db");
//Cek koneksi
if (mysqli_connect_error()) {
  echo "Koneksi database gagal:" , mysqli_connect_error();
}else{
    echo "berhasil";
}
?>