<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $sql = "SELECT * FROM `showroom_mobil`";
            $query = mysqli_query($conn, $sql);
            
            $num_rows = mysqli_num_rows($query);
            $list_Car = [];


            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            if($num_rows > 0){
                while($car = mysqli_fetch_assoc($query)){
                    $list_Car[] = $car;
                }

            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
                echo '<table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Brand Mobil</th>
                        <th scope="col">Warna Mobil</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Harga Mobil</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>';

            foreach($list_Car as $car){
                echo "<tr>";
                echo"<th scope='row'>".$car['id']."</th>";
                echo"<td>".$car['nama_mobil']."</td>";
                echo"<td>".$car['brand_mobil']."</td>";
                echo"<td>".$car['warna_mobil']."</td>";
                echo"<td>".$car['tipe_mobil']."</td>";
                echo"<td>".$car['harga_mobil']."</td>";
                echo "<script> var text = 'Apakah yakin menghapus data?' </script>";
                echo"<td>
                    <a href='form_update_mobil.php?id=".$car['id']."'><button type='button' class='btn btn-warning'>Edit</button></a>
                    <a class='btn btn-danger' href='delete.php?id=".$car['id']."' onclick='return confirm(text)'>Delete</a>
                    </td>";
                echo"</tr>";
            }
            echo '</tbody>
            </table>';

            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->
            }else{
                echo "<p> tidak ada dalam tabel </p>";
            }
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
