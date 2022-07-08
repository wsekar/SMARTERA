<?php

require 'functions.php';


if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data BERHASIL ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data GAGAL ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGELOLAAN TEMPAT WISATA</title>
    <link rel="stylesheet" href="styletambah.css">
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
                <li><a href="">Home</a></li>
                <li><a href="../wisata.php">Wisata</a></li>
                <li><a href="../pengelola/login.php">Pengelola</a></li>
                <li class="active"><a href="index.php">Pengunjung</a></li>

            </ul>

        </div>

    </header>
    <section>
        <div class="container">
            <h2 align="center">Form Pengisian Review dan Saran Tempat Wisata</h2>
            <form action="" method="post">
                <br>
                <h3> Berikan kontribusi anda untuk mengembangkan tempat wisata di Madiun ini dengan mengisikan data diri, review serta saran mengenai tempat wisata yang telah anda kunjungi melalui form dibawah ini</h3>
                <br>
                <br>
                <div class="mb-3">
                    <label for="nama"> Nama </label>
                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" placeholder="Masukkan Nama">
                </div>
                <br>
                <div class="mb-3">
                    <label for="domisili"> Domisili </label>
                    <input type="text" class="form-control" name="domisili" id="domisili" aria-describedby="domisili" placeholder="Masukkan Domisili">
                </div>
                <br>
                <div class="mb-3">
                    <label for="email"> Email </label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Masukkan Email">
                </div>
                <br>
                <div class="mb-3">
                    <label for="nama_tempatwisata"> Nama Tempat Wisata </label>
                    <input type="text" class="form-control" name="nama_tempatwisata" id="nama_tempatwisata" aria-describedby="tempat" placeholder="Nama Tempat Wisata">
                </div>
                <br>
                <div class="mb-3">
                    <label for="review"> Review Tempat Wisata </label>
                    <input type="textarea" class="form-control" name="review" aria-describedby="review" placeholder="Review Tempat Wisata">
                </div>
                <br>
                <div class="mb-3">
                    <label for="saran"> Saran Tempat Wisata </label>
                    <input type="textarea" class="form-control" name="saran" aria-describedby="saran" placeholder="Saran Tempat Wisata">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                <button type="cancel" class="btn btn-primary" name="cancel">Batal</button>
            </form>
        </div>
        <br>
        <h3> Terima Kasih Sudah Berkunjung</h3>
        <br>
        <div class="footer">

            <p class="made">--thank you for your participation | 2021--</p>

        </div>

</body>

</html>