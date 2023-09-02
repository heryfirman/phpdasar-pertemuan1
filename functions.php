<?php

$conn = mysqli_connect("localhost", "root", "", "latihanphpfirman");

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);

    $datas = [];
    while($data = mysqli_fetch_assoc($result)) {
        $datas[] = $data;
    }
    return $datas;
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);

    mysqli_query($conn, "INSERT INTO contoh VALUES('', '$nama')");

    return mysqli_affected_rows($conn);
}