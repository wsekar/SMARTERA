<?php

require 'functions.php';


$rows = query("SELECT * FROM tb_pengelolaan");

if(isset($_POST["cari"])){
    $keyword = $_POST["keyword"];

    $rows = cari($keyword);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGELOLAAN TEMPAT WISATA</title>
    <link rel="stylesheet" href="styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>

<body>
    <div class="website">
        <div class="container">
            <ul>
                <li><a href="https://web.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="../index.php">SMARTERA</a></h1>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../wisata.php">Wisata</a></li>
                <li><a href="../pengelola/login.php">Pengelola</a></li>
                <li class="active"><a href="index.php">Pengunjung</a></li>
                
            </ul>

        </div>

    </header>
    <section>
    <div class="container">
        <h2 align="center" >Review dan Saran Tempat Wisata</h1>
        <form action="" method="post">
        <br>
        <button>
            <tr><a href="tambah.php">Tambah</a></tr>
        </button>
        <br>
        <br>
    <form action="" method="post">
        <input type="text" name="keyword" id="keyword" autofocus placeholder="masukkan kata kunci...">
        <button type="submit" name="cari">Cari</button>
    </form>

    <br>
    <table  border="1" cellspacing="0" class="table">
        <thead>
            <th width="20px">Id</th>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Email</th>
            <th>Nama Tempat Wisata</th>
            <th>Review</th>
            <th>Saran</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) : ?>
                <tr bgcolor="#F0E68C">
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["nama"] ?></td>
                    <td><?php echo $row["domisili"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["nama_tempatwisata"] ?></td>
                    <td><?php echo $row["review"] ?></td>
                    <td><?php echo $row["saran"] ?></td>
                    <td>
                        <button> <a href="ubah.php?id=<?php echo $row["id"] ?>" 
                        onclick="return confirm('Apakah anda yakin akan mengubah data?')">ubah </a></button>
                        <button> <a href="hapus.php?id=<?php echo $row["id"] ?>" 
                        onclick="return confirm('Apakah anda yakin akan menghapus data?')">hapus </a></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <br>
    <div class="footer">

        <p class="made">--thank you for your participation | 2021--</p>

    </div>
</body>

</html>