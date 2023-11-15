<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$srv = "localhost";
$usr = "root";
$pwd = "";
$db = "modul3_wad";

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
$conn = mysqli_connect($srv, $usr, $pwd, $db);

if(!$conn){
    echo "alert('Database gagal terkoneksi')";
};
// 
?>