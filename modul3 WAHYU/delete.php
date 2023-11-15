<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $sql = "DELETE FROM showroom_mobil WHERE id = $id";
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Berhasil menghapus data mobil'); window.location.href='list_mobil.php';</script>";
    }else{
        echo "<script>alert('Gagal menghapus data mobil'); window.location.href='home.php'</script>";
    }

// Tutup koneksi ke database setelah selesai menggunakan database

?>