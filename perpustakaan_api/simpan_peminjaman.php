<?php

require "koneksi.php";

$judul_buku = $_GET['judul_buku'] ?? '';
$penulis = $_GET['penulis'] ?? '';
$foto_buku = $_GET['foto_buku'] ?? '';
$nis = $_GET['nis'] ?? '';
$nama = $_GET['nama'] ?? '';
$kelas = $_GET['kelas'] ?? '';

$tanggal_pinjam = date('Y-m-d');
$tanggal_kembali = date('Y-m-d', strtotime('+7 days'));

$sql = "INSERT INTO peminjaman
(judul_buku, penulis, foto_buku, nis, nama, kelas, tanggal_pinjam, tanggal_kembali)
VALUES
('$judul_buku', '$penulis', '$foto_buku', '$nis', '$nama', '$kelas', '$tanggal_pinjam', '$tanggal_kembali')";

if (mysqli_query($conn, $sql)) {
    echo "Peminjaman berhasil disimpan";
} else {
    echo "Gagal menyimpan: " . mysqli_error($conn);
}

?>