<?php

require 'functions.php';
$id = $_GET["id"];

if(hapus($id) > 0){
    echo "
    <script>
    alert ('Data BERHASIL Dihapus');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
        <script>
        alert ('Data GAGAL Dihapus');
        // document.location.href = 'index.php';
        </script>
        ";
}
?>