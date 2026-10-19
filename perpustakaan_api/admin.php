<?php
require "koneksi.php";

$sql = "SELECT * FROM peminjaman ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Perpustakaan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #2563eb;
            color: white;
        }

        tr:nth-child(even) {
            background: #f8f9fa;
        }
    </style>
</head>

<body>

    <h1>📚 ADMIN PERPUSTAKAAN</h1>

    <div style="text-align:center; margin-bottom:20px;">
    <button onclick="window.print()">
        🖨️ PRINT
    </button>

    <a href="export_excel.php"
       style="display:inline-block; margin-left:10px; padding:10px 15px; background:#198754; color:white; text-decoration:none; border-radius:6px;">
        📊 EXPORT EXCEL
    </a>
</div>

    <div class="container">

        <table>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
            </tr>

            <?php
            $no = 1;

            while ($data = mysqli_fetch_assoc($result)) {
            ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($data['kode_buku']); ?></td>
                <td><?= htmlspecialchars($data['judul_buku']); ?></td>
                <td><?= htmlspecialchars($data['penulis']); ?></td>
                <td><?= htmlspecialchars($data['nis']); ?></td>
                <td><?= htmlspecialchars($data['nama']); ?></td>
                <td><?= htmlspecialchars($data['kelas']); ?></td>
                <td><?= htmlspecialchars($data['tanggal_pinjam']); ?></td>
                <td><?= htmlspecialchars($data['tanggal_kembali']); ?></td>
                <td><?= htmlspecialchars($data['status']); ?></td>
            </tr>

            <?php } ?>

        </table>

    </div>

</body>
</html>