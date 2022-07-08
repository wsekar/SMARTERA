<?php

require 'functions.php';

$rows = query("SELECT * FROM tempatwisata");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGELOLAAN TEMPAT WISATA</title>
    <link rel="stylesheet" href="../../wisata.css">
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
            <h1><a href="index.php">SMARTERA</a></h1>
            <ul>
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="../feedback/index.php">Review dan Saran</a></li>
                <li class="active"><a href="index.php">Wisata</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>

        </div>

    </header>

    <section class="wisata">
        <div class="container">
            <div class="title">
                <h2 style="background-color: burlywood; height:35px; padding-top:10px">Tempat Wisata Kabupaten Madiun</h2>
            </div>
            <a href="tambah.php" style="color:coral">Tambah Data</a>
            <?php $i = 1; ?>
            <!-- <section class="content">
        <table cellpadding=10 cellspacing=20>
            <tr>
                <td><img src="tamkot_caruban.jpg" width="300" ></td>
                <td padding-left="10">
                    <h2 align-text="justify">Taman Kota Caruban</h2>
                    <p align="justify">Menghabiskan waktu bersama keluarga atau bercengkrama dengan teman adalah hal yang sangat menyenangkan.
                        Taman Kota Caruban menjadi salah satu objek wisata yang populer dan banyak dikunjungi warga Madiun.
                        Hal tersebut dikarenakan taman ini cukup luas dan memiliki suasana taman yang asri.
                        Tak heran apabila banyak kalangan muda hingga tua suka berada disini.
                        Lokasi taman kota Caruban ini berada di Jalan Anggur, Purwosari.
                        Anda bisa menikmati banyak fasilitas yang disediakan di taman ini, seperti gazebo dan wahana bermain anak.
                        Disisi lain, banyak juga menjual makanan di pinggir taman ini yang bisa Anda nikmati sembari keliling taman.
                        Tempat yang asri ini bisa menjadi tempat nongkrong yang asik.
                    </p>
                    <br>
                    <p>Lokasi: Jl. Anggur, Lingkungan Dua, Purwosari, Kec. Wonoasri, Madiun, Jawa Timur.</p>
                </td>
            </tr>
            <tr>
                <td><img src="umbul.jpg" width="300"></td>
                <td>
                    <h2 align-text="justify">Taman Rekreasi Wisata Umbul</h2>
                    <p align="justify">Merupakan taman peninggalan di masa penjajahan Belanda, taman ini memiliki banyak objek menarik.
                        Taman Rekreasi Wisata Umbul juga memiliki sumber air belerang yang hangat. Ada kebun binatang mini dan juga beberapa
                        satwa di dalamnya. Tempat wisata di Madiun ini cukup populer dan menjadi destinasi hits.
                        Salah satu keunikan dari tempat wisata tersebut adalah adanya dua jurang yang mengapit dan diburu untuk dijadikan tempat
                        berfoto. Lokasinya berada di Jalan Ngumbul, Golonggong. Liburan bisa semakin seru dan menyenangkan.
                    </p>
                    <br>
                    <p>Lokasi: Madiun Umbul Square, Umbul, Glonggong, Kec. Dolopo, Kota Madiun, Jawa Timur.</p>
                </td>
            </tr>
            <tr>
                <td><img src="dumilah.jpg" width="300"></td>
                <td>
                    <h2 align-text="justify">Dumilah Waterpark</h2>
                    <p align="justify">Wisata Madiun berikutnya merupakan wisata atau tempat rekreasi yang banyak difavoritkan oleh warga Madiun.
                        Di sini nanti para pengunjung bisa mencoba beberapa kegiatan seru. Misalnya seperti flying fox atau mini game.
                        Ada juga fasilitas food court yang tersedia di lokasi wisata sehingga Anda tak perlu khawatir jika ingin berwisata kuliner.
                        Dumilah Waterpark berada di Jalan Slamet Riyadi 99, Klegen. Jam bukanya adalah mulai dari jam 07.00 hingga 19.00 WIB.
                    </p>
                    <br>
                    <p>Lokasi: Jl. Slamet Riyadi No.99, Klegen, Kec. Madiun, Kota Madiun, Jawa Timur.</p>
                </td>
            </tr>
            <tr>
                <td><img src="taman_tirtoirmolo.jpg" width="300"></td>
                <td>
                    <h2 align-text="justify">Taman Wisata Tirtoirmolo Waterpark</h2>
                    <p align="justify">Tirtonirmolo Waterpark merupakan objek wisata air yang memiliki wahana cukup komplit. Mulai dari kolam renang 
                    seluncur, kolam renang laba-laba, kolam air mancur kabut hingga boom-boom boat. Tidak hanya permainan air saja, tetapi ada juga 
                    wahana becak family dan masih banyak lagi.
                    </p>
                    <br>
                    <p>Lokasi: Jl. Raya Ngawi-Madiun No.KM. 7, Sambi, Tempuran, Kec. Ngawi, Kab. Ngawi, Jawa Timur.</p>
                </td>
            </tr>

        </table>
    </section> -->
            <table>
                <tbody>
                    <?php foreach ($rows as $row) : ?>

                        <td><?php $row["id_tempatwisata"] ?></td>
                        <tr>
                            <td style="padding-top: 10px;"><img src="gambar/<?php echo $row['gambar_tempatwisata']; ?>" width="400px" height="200px" /></td>
                        <tr>
                            <td style="font-weight: bold; font-size:14pt"><?php echo $row["nama_tempatwisata"] ?></td>
                        </tr>
                        <tr>
                            <td style="text-align:justify;"><?php echo $row["tentang_tempatwisata"] ?></td>
                        </tr>
                        <tr>
                            <td style="color: #666; font-size:11pt"><?php echo "Lokasi : " . $row["lokasi"] ?></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="ubah.php?id_tempatwisata=<?php echo $row["id_tempatwisata"] ?>" onclick="return confirm('Apakah Anda yakin akan mengubah data?')" style="color:coral">ubah |</a>
                                <a href="hapus.php?id_tempatwisata=<?php echo $row["id_tempatwisata"]; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data?')" style="color:coral">hapus </a>
                            </td>
                        </tr>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </section>
    <div class="footer">

        <p class="made">--thank you for your participation | 2021--</p>

    </div>

</body>

</html>