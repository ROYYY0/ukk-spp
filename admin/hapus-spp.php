<?php

$id_spp = $_GET['id_spp'];

include '../koneksi.php';

// Gunakan prepared statement untuk mencegah SQL injection
$sql = "DELETE FROM spp WHERE id_spp=?";
$stmt = mysqli_prepare($koneksi, $sql);

// Bind parameter ke prepared statement
mysqli_stmt_bind_param($stmt, 'i', $id_spp);

// Eksekusi prepared statement
$query = mysqli_stmt_execute($stmt);

if ($query) {
    header("Location: ?url=spp");
} else {
    echo "<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=spp');</script>";
}

// Tutup statement
mysqli_stmt_close($stmt);

// Tutup koneksi
mysqli_close($koneksi);

?>
