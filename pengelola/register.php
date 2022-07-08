<?php

include "../database.php";
session_start();

    if (isset($_POST["register"])) {
        $nama_pengelola = $_POST["nama_pengelola"];
        $email_pengelola = $_POST["email_pengelola"];
        $posisi_pengelola = $_POST["posisi_pengelola"];
        $password = mysqli_escape_string($conn, $_POST["password"]);
        $password2 = mysqli_escape_string($conn, $_POST["password2"]);

        $result = mysqli_query($conn, "SELECT email_pengelola FROM pengelola 
                                WHERE email_pengelola='$email_pengelola'");
        if(mysqli_fetch_assoc($result)){
            echo "
            <script>
            alert('Email sudah terdaftar');
            document.location.href = 'register.php';
            </script>
            ";
        } 

        if($password !== $password2){
            echo "
            <script>
            alert('Konfirmasi password tidak sama');
            document.location.href = 'register.php';
            </script>
            ";
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $result = mysqli_query($conn, "INSERT INTO pengelola VALUES ('', '$nama_pengelola', '$posisi_pengelola', '$email_pengelola', '$password')");

            if($result){
                echo "
                <script>
                alert('Registrasi berhasil');
                document.location.href = 'login.php';
                </script>
                ";
            }

            return mysqli_affected_rows($conn);
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

    <section class="content-register">
        <div class="container">
            <div class="title">
                <h2>REGISTER</h2>
            </div>
            
            <form method="POST" class="form" action="register.php">
                <input type="hidden" name="id_pengelola" id="id" value="<?php echo $row[""] ?>">
                <label for="nama_pengelola" style="padding: top 15px">Nama</label>
                <input type="text" name="nama_pengelola" class="form-content" required />
                <div class="form-border"></div>

                <label for="posisi_pengelola" style="padding-top: 15px">Posisi</label>
                <input type="text" name="posisi_pengelola" class="form-content" required />
                <div class="form-border"></div>

                <label for="email_pengelola" style="padding-top: 15px">Email</label>
                <input type="email" name="email_pengelola" class="form-content" autocomplete="on" required />
                <div class="form-border"></div>

                <label for="password" style="padding-top:15px">Password</label>
                <input type="password" name="password" class="form-content" required />
                <div class="form-border"></div>

                <label for="password2" style="padding-top:15px">Konfirmasi Password</label>
                <input type="password" name="password2" class="form-content" required />
                <div class="form-border"></div>

                <div><input class="submit-btn" type="submit" name="register" value="REGISTER"></div>
                <p>
                    Sudah memiliki akun? <a href="login.php" class="login">Login di sini</a>
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
        margin-top: 58px;
    }

    .footer .made {
        color: white;
    }

    /* section class content-register */

    .content-register {
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

    .register {
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