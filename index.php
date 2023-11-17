<?php
include_once "init.php";

//query select untuk mengambil data mahasiswa
$query_select = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi_ke_db, $query_select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            display: inline-block;
        }

        a.tambah {
            background-color: #28a745;
        }

        a.tambah:hover {
            background-color: #218838;
        }

        .mahasiswa {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            text-align: left;
        }

        .mahasiswa hr {
            border: 1px solid #ddd;
        }

        a.edit, a.hapus {
            background-color: #007bff;
        }

        a.edit:hover, a.hapus:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a class="tambah" href="tambah.php">Tambah Data</a>

    <?php
    while($mhs = mysqli_fetch_assoc($result)){
        echo "<div class='mahasiswa'>";
        echo "    <p>Nama: ".$mhs['nama']."</p>";
        echo "    <p>Nim: ".$mhs['nim']."</p>";
        echo "    <p>Alamat: ".$mhs['alamat']."</p>";
        echo "    <hr>";
        echo "    <a class='edit' href='ubah.php/".$mhs['id']."'>Edit</a>";
        echo "    <a class='hapus' href='hapus.php/".$mhs['id']."'>Hapus</a>";
        echo "</div>";
    }
    ?>

</body>
</html>
