<?php
include '../database.php';
session_start();
$rows = query("SELECT * FROM pengelola");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
return $rows;
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
                <li class="active"><a href="index.php">Dashboard</a></li>
                <li><a href="feedback/index.php">Review dan Saran</a></li>
                <li><a href="wisata/index.php">Wisata</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
    
    <div class="box">
        <h2>Selamat Datang, <?php echo $_SESSION['nama_pengelola'] ?></h2>
    </div>
    </div>

    <div class="footer">

        <p class="made">--thank you for your participation | 2021--</p>

    </div>
</body>

<!-- STYLE -->
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

    /* class footer */

    .footer {
        height: 30px;
        background-color: burlywood;
        text-align: center;
        padding-top: 15px;
        margin-top: 376px;
    }

    .footer .made {
        color: white;
    }

    /* section class content*/

 
    .title {
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }

    .box {
    background-color: white;
    border: 1px solid gray;
    padding: 50px;
    box-sizing: border-box;
    margin: 10px 0 25px 0;
}
</style>

</html>