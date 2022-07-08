<?php
session_start();
require 'functions.php';


if (isset($_POST["add"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Feedback BERHASIL ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Feedback GAGAL ditambahkan');
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
                <li class="active"><a href="index.php">Review dan Saran</a></li>
                <li><a href="../wisata/index.php">Wisata</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <section class="tambah-feedback">
        <div class="title">
            <h2 style="background-color: burlywood; height:35px; padding-top:10px">Tambah Feedback</h2>
        </div>
        <div class="container">
            <form action="" method="post">
                <table cellpadding=10 cellspasing=10>
                    <input type="hidden" name="id_feedback" value="<?php echo $row[""] ?>">
                    <tr>
                        <td>Feedback</td>
                        <td><input type="text" name="isi_feedback" size="100%"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="add">Simpan</button>
                            <button type="reset" name="reset">Batal</button>
                        </td>
                    </tr>
                </table>
            </form>
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

    /* class tambah-wisata */
    .tambah-wisata {
        width: 97%;
        margin-left: 20px;
        margin-right: 20px;
    }

    .title {
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }

    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }

    input[type=text] {
        background-color: whitesmoke;
        border-radius: 5px;
        padding: 15px;
    }


    button {
        background: burlywood;
        border-radius: 7px;
        cursor: pointer;
        color: white;
        font-family: sans-serif;
        height: 30px;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 80px;
        margin-left: 280px;
        margin-inline-end: -250px;
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
        bottom: 0px;
    }

    .footer .made {
        color: white;
    }
</style>

</html>