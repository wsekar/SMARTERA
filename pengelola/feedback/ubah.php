<?php
$id_feedback = $_POST["id_feedback"];

include '../../database.php';
$query = mysqli_query($conn, "SELECT * FROM feedback WHERE id_feedback='$id_feedback'");
$data = mysqli_fetch_array($query);

$id_feedback = $data["id_feedback"];
$isi_feedback = $data["isi_feedback"];
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
                <li><a href="../feedback/index.php">Review dan Saran</a></li>
                <li class="active"><a href="index.php">Wisata</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <body>
        <section class="ubah-wisata">
            <div class="container">
                <div class="title">
                    <h2>Ubah Tempat Wisata</h2>
                </div>
                <form action="" method="post">
                    <?php foreach ($rows as $row) : ?>
                        <table>
                            <input type="hidden" name="id_feedback" value="<?php echo $row["id_feedback"] ?>">
                            <tr>
                                <td>Feedback </td>
                                <td><input type="text" name="isi_feedback" value="<?php echo $row["isi_feedback"] ?>"></td>
                            </tr>
                            <tr>
                                <td><button type="submit" name="update">Simpan</button>
                                    <button type="reset" name="cancel">Batal</button>
                                </td>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                </form>
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
            bottom: 0px;
        }

        .footer .made {
            color: white;
        }

        /* class tambah-wisata */
        .ubah-wisata {
            width: 97%;
            margin-left: 20px;
            margin-right: 20px;
        }

        .title {
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;
        }
    </style>

</html>