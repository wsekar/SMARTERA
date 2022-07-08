<?php

require 'functions.php';
$id_feedback = $_POST["id_feedback"];

if(hapus($id_feedback) > 0){
    echo "
    <script>
    alert ('Feedback BERHASIL Dihapus');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
        <script>
        alert ('Feedback GAGAL Dihapus');
        // document.location.href = 'index.php';
        </script>
        ";
}
