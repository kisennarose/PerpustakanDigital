<?php

require "koneksi.php";

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_peminjaman.xls");

echo "No\tKode Buku\tJudul Buku\tPenulis\tNIS\tNama\tKelas\tTanggal Pinjam\tTanggal Kembali\tStatus\n";

$sql = "SELECT * FROM peminjaman ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$no = 1;

while ($data = mysqli_fetch_assoc($result)) {

    echo $no++ . "\t";
    echo $data['kode_buku'] . "\t";
    echo $data['judul_buku'] . "\t";
    echo $data['penulis'] . "\t";
    echo $data['nis'] . "\t";
    echo $data['nama'] . "\t";
    echo $data['kelas'] . "\t";
    echo $data['tanggal_pinjam'] . "\t";
    echo $data['tanggal_kembali'] . "\t";
    echo $data['status'] . "\n";
}

?>