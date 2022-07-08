<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_wisata');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }


    return $rows;
}


function tambah($data)
{
    global $conn;
    $nama = $data["nama"];
    $domisili = $data["domisili"];
    $email = $data["email"];
    $tempat = $data["nama_tempatwisata"];
    $review = $data["review"];
    $saran = $data["saran"];

    $query = "INSERT INTO tb_pengelolaan VALUES
                 ('', '$nama', '$domisili', '$email', '$tempat', '$review', '$saran')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    
    global $conn;
    $query = "DELETE FROM tb_pengelolaan WHERE id=$id";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}


function ubah($data){

    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $domisili = $data["domisili"];
    $email = $data["email"];
    $tempat = $data["nama_tempatwisata"];
    $review = $data["review"];
    $saran = $data["saran"];
    
    $query = "UPDATE tb_pengelolaan SET
                nama = '$nama',
                domisili = '$domisili',
                email = '$email',
                nama_tempatwisata = '$tempat',
                review = '$review',
                saran = '$saran'
                WHERE id='$id'
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword){
    $query = "SELECT * FROM tb_pengelolaan WHERE nama LIKE '%$keyword%'";

    return query($query);
}
