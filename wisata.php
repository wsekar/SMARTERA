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
    <link rel="stylesheet" href="wisata.css">
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
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="wisata.php">Wisata</a></li>
                <li><a href="pengelola/login.php">Pengelola</a></li>
                <li><a href="pengunjung/index.php">Pengunjung</a></li>
            </ul>

        </div>

    </header>

    <section class="wisata">
        <div class="container">
            <div class="title">
                <h2 style="background-color: burlywood; height:35px; padding-top:10px">Tempat Wisata Kabupaten Madiun</h2>
            </div>

                <div class="box">
            <table>
                <tbody>
                    <?php foreach ($rows as $row) : ?>
                        <td><?php $row["id_tempatwisata"] ?></td>
                        <tr>
                            <td style="padding-top: 10px;"><img src="gambar/<?php echo $row['gambar_tempatwisata']; ?>" width="400px" height="200px" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; font-size:14pt"><?php echo $row["nama_tempatwisata"] ?></td>
                        </tr>
                        <tr>
                            <td style="text-align:justify;"><?php echo $row["tentang_tempatwisata"] ?></td>
                        </tr>
                        <tr>
                            <td style="color: #666; font-size:11pt"><?php echo "Lokasi : " . $row["lokasi"] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                    </div>
        </div>
    </section>


    <div class="footer">
        <p class="made">--thank you for your participation | 2021--</p>
    </div>

</body>


</html>