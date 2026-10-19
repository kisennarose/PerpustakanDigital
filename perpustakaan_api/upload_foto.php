<?php

if (isset($_FILES['file'])) {

    $folder = "uploads/";

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $namaFile = "foto_" . time() . ".jpg";
    $lokasi = $folder . $namaFile;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $lokasi)) {
        echo $namaFile;
    } else {
        echo "GAGAL_UPLOAD";
    }

} else {
    echo "FILE_TIDAK_DITEMUKAN";
}

?>