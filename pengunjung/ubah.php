<?php

require 'functions.php';

$id = $_GET["id"];

$rows = query("SELECT * FROM tb_pengelolaan WHERE id='$id'");

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0){
        echo "
            <script>
                alert('Data BERHASIL diubah');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data GAGAL diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<html>
<head>
    <title>Ubah Data</title>
    <link rel="stylesheet" type="text/css" href="ubah.css">
</head>

<body>


    <h1>Form Ubah Review dan Saran Tempat Wisata</h1>
    <form action="" method="post">
        <?php foreach ($rows as $row) : ?>
            <table>
                <input type="hidden" name="id" id="id" value="<?php echo $row["id"] ?>">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama" value="<?php echo $row["nama"] ?>"></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><input type="text" name="domisili" id="domisili" value="<?php echo $row["domisili"] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email" value="<?php echo $row["email"] ?>"></td>
            </tr>
            <tr>
                <td>Nama Tempat Wisata</td>
                <td><input type="text" name="nama_tempatwisata" id="tempat" value="<?php echo $row["nama_tempatwisata"] ?>"></td>
            </tr>
            <tr>
                <td>Review Tempat Wisata</td>
                <td><textarea name="review" id="review" value="<?php echo $row["review"] ?>"></textarea></td>
            </tr>
            <tr>
                <td>Saran Tempat Wisata</td>
                <td><textarea name="saran" id="saran" value="<?php echo $row["saran"] ?>"></textarea></td>
            </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Simpan</button>
                    <button type="reset" name="cancel">Batal</button></td>
                </tr>
            </table>
        <?php endforeach; ?>
    </form>

</body>

</html>