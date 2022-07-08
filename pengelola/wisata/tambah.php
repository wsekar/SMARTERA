<?php
session_start();
require 'functions.php';

if (isset($_POST["add"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data tempat wisata BERHASIL ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data tempat wisata GAGAL ditambahkan');
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

    <section class="tambah-wisata">
        <div class="container">
            <div class="title">
                <h2 style="background-color: burlywood; height:35px; padding-top:10px">Tambah Tempat Wisata</h2>
            </div>
            <div class="box">
                <form action="" method="post">
                    <table cellpadding=10 cellspasing=10>
                        <input type="hidden" name="id_tempatwisata" id="id_tempatwisata" value="<?php echo $row[""] ?>">
                        <tr>
                            <td>Gambar Tempat Wisata</td>
                            <td><input type="file" name="gambar_tempatwisata" size="100%"></td>
                        </tr>
                        <tr>
                            <td>Nama Tempat Wisata</td>
                            <td><input type="text" name="nama_tempatwisata" size="100%"></td>
                        </tr>
                        <tr>
                            <td>Lokasi Tempat Wisata</td>
                            <td><input type="text" name="lokasi" id="lokasi" size="100%"></td>
                        </tr>
                        <tr>
                            <td>Tentang Tempat Wisata</td>
                            <td><textarea type="text" name="tentang_tempatwisata" size="100%" cols="102px" rows="10px"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" name="add">Simpan</button>
                                <button type="reset" name="cancel">Batal</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>

    <div class="footer">
        <p class="made">--thank you for your participation | 2021--</p>
    </div>
</body>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: sans-serif;
    }


    /* class website */

    a {
        color: inherit;
        text-decoration: none;
    }

    .website {
        padding: 5px 0;
        background-color: burlywood;
    }

    .website ul li {
        display: inline-block;
        color: white;
        margin-right: 10px;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    .container::after {
        content: '';
        display: block;
        clear: both;
    }


    /* class header */

    header h1 {
        float: left;
        padding: 15px 0;
        color: burlywood;
    }

    header ul {
        float: right;
    }

    header ul li {
        display: inline-block;
    }

    header ul li a {
        padding: 25px 20px;
        display: inline-block;
    }

    header ul li a:hover {
        background-color: burlywood;
        color: white;
    }

    .active {
        background-color: burlywood;
        color: white;
    }

    /* class tambah-wisata */
    .tambah-wisata {
        margin-left: 20px;
        margin-right: 20px;
    }

    .title {
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }

    input[type=file] {
        background-color: burlywood;
        padding: 15px;
        width: 730px;

    }

    input[type=text] {
        background-color: white;
        border: 1px solid;
        border-radius: 2px;
        padding: 15px;
    }
    textarea[type=text] {
        background-color: white;
        border: 1px solid;
        border-radius: 2px;
        padding: 15px;
    }

    button[type=submit] {
        background: #008000;
        border: solid 0px;
        border-radius: 5px;
        color: #FFF;
        padding: 13px;
        width: 100px;
        cursor: pointer;
    }

    button[type=submit]:hover {
        background: #003300;
        color: #FFF;
        width: 100px;
        cursor: pointer;
    }

    button[type=reset] {
        background: #000099;
        border: solid 0px;
        border-radius: 5px;
        color: #FFF;
        padding: 13px;
        width: 100px;
        cursor: pointer;
    }

    button[type=reset]:hover {
        background: #000033;
        color: #FFF;
        width: 100px;
        cursor: pointer;
    }

    .box {
        background-color: white;
        border: 1px solid #ccc;
        padding: 15px;
        box-sizing: border-box;
    }


    /* class footer */

    .footer {
        height: 30px;
        background-color: burlywood;
        text-align: center;
        padding-top: 15px;
        margin-top: 19px;
    }

    .footer .made {
        color: white;
    }
</style>

</html>