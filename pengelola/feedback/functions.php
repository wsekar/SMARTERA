<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_wisata');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $id_feedback = $data["id_feedback"];
    $isi_feedback = $data["isi_feedback"];

    $query = "INSERT INTO feedback VALUES ('$id_feedback', '$isi_feedback')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id_feedback)
{

    global $conn;
    $query = "DELETE * FROM feedback WHERE id_feedback='$id_feedback'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{

    global $conn;
    $id_feedback = $data["id_feedback"];
    $isi_feedback = $data["isi_feedback"];
    $query = "UPDATE feedback SET
            isi_feedback = '$isi_feedback',
            WHERE id_feedback='$id_feedback'
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
