<?php

require 'functions.php';
$id_tempatwisata = $_GET["id_tempatwisata"];

if(hapus($id_tempatwisata) > 0){
    echo "
    <script>
    alert ('Data Tempat Wisata BERHASIL Dihapus');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
        <script>
        alert ('Data Tempat Wisata GAGAL Dihapus');
        // document.location.href = 'index.php';
        </script>
        ";
}
?>