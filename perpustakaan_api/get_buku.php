<?php

require "koneksi.php";

$kode = $_GET['kode'] ?? '';

$sql = "SELECT * FROM buku WHERE kode_buku = '$kode'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);

    header("Content-Type: application/json");
    echo json_encode($data);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Buku tidak ditemukan"
    ]);
}

?>