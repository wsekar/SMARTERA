<?php

require 'functions.php';

$rows = query("SELECT * FROM tb_pengelolaan");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGELOLAAN TEMPAT WISATA</title>
    <link rel="stylesheet" href="stylehome.css">
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
                <li class="active"><a href="index.php">Review dan Saran</a></li>
                <li><a href="../wisata/index.php">Wisata</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <section class="feedback">
        <div class="container">
            <div class="title">
                <h2>REVIEW DAN SARAN PENGUNJUNG TEMPAT WISATA</h2>
            </div>
            <form action="" method="post">
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <td style="text-align: center;">Nama</td>
                        <td style="text-align: center;">Domisili</td>
                        <td width="200" style="text-align: center;">Nama Tempat Wisata</td>
                        <td style="text-align: center;">Review</td>
                        <td style="text-align: center;">Saran</td>
                        <td style="text-align: center;">Feedback</td>
                    </thead>
                    <tbody>
                        <input type="hidden" name="id_feedback" value="<?php echo $row[""] ?>">
                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <td><?php echo $row["nama"] ?></td>
                                <td><?php echo $row["domisili"] ?></td>
                                <td><?php echo $row["nama_tempatwisata"] ?></td>
                                <td><?php echo $row["review"] ?></td>
                                <td><?php echo $row["saran"] ?></td>
                                <td>
                                    <button><a href="tambah.php "> tambah</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
    </section>
    </div>


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

    html,
    body {
        height: 100%;
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
        min-height: 100%;
        position: relative;
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


    /* class footer */

    .footer {
        background-color: burlywood;
        text-align: center;
        width: 100%;
        height: 50px;
        padding-left: 10px;
        line-height: 50px;
        position: absolute;

    }

    .footer .made {
        color: white;
    }

    /* class feedback */

    .feedback {
        height: 100%;
        margin: auto auto auto auto;
        width: 97%;
        margin-left: 20px;
        margin-right: 20px;
    }

    .title {
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }

    table {
        margin: auto;
        color: rgb(51, 82, 74);
        padding: 60px;
        background-color: burlywood;
        padding: 15px;
    }

    label {
        margin-left: 280px;
        font-family: sans-serif;
        background-color: bisque;
    }

    table {
        margin: auto;
        padding: 60px;
        padding: 15px;
        border-collapse: inherit;
        width: 100%;
        border: 1px solid #cccccc;
        background-color: burlywood;
        height: 100%;
    }

    tbody tr td {
        background-color: whitesmoke;
    }

    .table tr {
        height: 30px;
    }

    .table tr td {
        padding: 5px 5px;
        text-align: justify;
    }

    button {
        background: burlywood;
        border-radius: 5px;
        cursor: pointer;
        color: black;
        font-family: sans-serif;
        height: 30px;
        margin-top: 8px;
        margin-bottom: 2px;
        width: 65px;
        margin-left: 5px;
    }
</style>

</html>