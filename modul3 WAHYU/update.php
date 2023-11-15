<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($data){
        global $id;
        global $conn;

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $nama = $data['nama_mobil'];
        $brand = $data['brand_mobil'];
        $warna = $data['warna_mobil'];
        $tipe = $data['tipe_mobil'];
        $harga = $data['harga_mobil'];   
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $sql = "UPDATE showroom_mobil SET nama_mobil = '$nama', brand_mobil = '$brand', warna_mobil = '$warna', tipe_mobil = '$tipe', harga_mobil = '$harga' WHERE id = $id";

        // Eksekusi perintah SQL
        mysqli_query($conn, $sql);

        // Buatkan kondisi jika eksekusi query berhasil
        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Berhasil mengubah data mobil'); window.location.href='list_mobil.php';</script>";
        }

        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        else{
            echo "<script>alert('Gagal mengubah data mobil'); window.location.href='home.php'</script>";
        }
    }
    // Panggil fungsi update dengan data yang sesuai
    if($_POST){
        update($_POST);
    }
// Tutup koneksi ke database setelah selesai menggunakan database
    mysqli_close($conn);
?>