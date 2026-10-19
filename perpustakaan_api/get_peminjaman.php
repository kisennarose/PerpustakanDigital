<?php

require "koneksi.php";

$sql = "SELECT * FROM peminjaman ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_assoc($result)) {

    echo "📚 PEMINJAMAN BUKU\n";
    echo "━━━━━━━━━━━━━━━━━━\n";
    echo "📖 Judul   : " . $data['judul_buku'] . "\n";
    echo "✍️ Penulis : " . $data['penulis'] . "\n";
    echo "👤 Nama    : " . $data['nama'] . "\n";
    echo "🪪 NIS     : " . $data['nis'] . "\n";
    echo "🏫 Kelas   : " . $data['kelas'] . "\n";
    echo "📅 Pinjam  : " . $data['tanggal_pinjam'] . "\n";
    echo "🔄 Kembali : " . $data['tanggal_kembali'] . "\n";
    echo "📌 Status  : " . $data['status'] . "\n";
    echo "\n\n";
}

?>