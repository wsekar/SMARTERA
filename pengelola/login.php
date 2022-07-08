<?php

include "../database.php";
session_start();

if (isset($_POST["login"])) {
    $email_pengelola = mysqli_real_escape_string($conn, $_POST["email_pengelola"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $result = mysqli_query($conn, "SELECT * FROM pengelola WHERE email_pengelola='$email_pengelola'");
    if (mysqli_num_rows($result) >0) {
        $rows = mysqli_fetch_assoc($result);

        if (password_verify($password, $rows["password"])) {
            $_SESSION["id_pengelola"] = $rows["id_pengelola"];
            $_SESSION['email_pengelola'] = $rows["email_pengelola"];
            $_SESSION['nama_pengelola'] = $rows["nama_pengelola"];
            $_SESSION['posisi_pengelola'] = $rows["posisi_pengelola"];
            header("Location: index.php");
        } else {

            echo "<Script>
            alert('Email atau password salah');
            document.location.href = 'login.php';
            </Script>";
        }
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
                <li><a href="../index.php">Home</a></li>
                <li><a href="../wisata.php">Wisata</a></li>
                <li class="active"><a href="login.php">Pengelola</a></li>
                <li><a href="../pengunjung/index.php">Pengunjung</a></li>
            </ul>
        </div>
    </header>


    <section class="content-login">
        <div class="container">
            <div class="title">
                <h2>LOGIN</h2>
            </div>

            <form method="POST" class="form">
                <label for="email_pengelola" style="padding: top 15px;">Email</label>
                <input type="email" id="email" name="email_pengelola" class="form-content" autocomplete="on" required />
                <div class="form-border"></div>
                <label for="password" style="padding-top:15px">Password</label>
                <input type="password" id="password" name="password" class="form-content" required />
                <div class="form-border"></div>

                <div><input class="submit-btn" type="submit" name="login" value="LOGIN"></div>
                <p>
                    Belum memiliki akun? <a href="register.php" class="register">Buat akun baru</a>
                </p>
            </form>
        </div>
    </section>

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
        margin-top: 262px;
    }

    .footer .made {
        color: white;
    }

    /* section class content-login */

    .content-login {
        background: transparent;
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

    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }

    .form-border {
        background: burlywood;
        height: 1px;
        width: 100%;
    }

    .form-content {
        border: none;
        outline: none;
        padding-top: 16px;
        font-size: medium;
    }

    .signup {
        color: #145880;
        text-align: center;
        font-size: 11pt;
    }

    p {
        font-size: 11pt;
    }

    p a {
        text-decoration: none;
        color: #145880;
    }

    .submit-btn {
        background: #008000;
        border: solid 0px;
        border-radius: 5px;
        color: #FFF;
        margin: 4px 10px;
        padding: 15px;
        width: 145px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background: #003300;
        color: #FFF;
        width: 145px;
        cursor: pointer;
    }
</style>

</html>