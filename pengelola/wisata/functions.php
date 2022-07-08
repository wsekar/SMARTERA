<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_wisata');

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
return $rows;
}

function tambah($data){
    global $conn;
    $id_tempatwisata = $data["id_tempatwisata"];
    $nama_tempatwisata = $data["nama_tempatwisata"];
    $lokasi = $data["lokasi"];
    $tentang_tempatwisata = $data["tentang_tempatwisata"];
    $gambar_tempatwisata = $data["gambar_tempatwisata"];

    $query = "INSERT INTO tempatwisata VALUES ('$id_tempatwisata', '$nama_tempatwisata', '$lokasi', '$tentang_tempatwisata', '$gambar_tempatwisata')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}


function hapus($id_tempatwisata){

    global $conn;
    $query = "DELETE FROM tempatwisata WHERE id_tempatwisata='$id_tempatwisata'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data){

    global $conn;
    $id_tempatwisata = $data["id_tempatwisata"]; 
    $nama_tempatwisata = $data["nama_tempatwisata"]; 
    $lokasi = $data["lokasi"]; 
    $tentang_tempatwisata = $data["tentang_tempatwisata"]; 
    $gambar_tempatwisata = $data["gambar_tempatwisata"]; 
    $query = "UPDATE tempatwisata SET
            gambar_tempatwisata = '$gambar_tempatwisata',
            nama_tempatwisata = '$nama_tempatwisata',
            lokasi = '$lokasi',
            tentang_tempatwisata = '$tentang_tempatwisata'
            WHERE id_tempatwisata='$id_tempatwisata'
    "; 
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
