<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data SPP</title>
    <!-- Sertakan stylesheet atau CSS tambahan jika diperlukan -->
</head>
<body>

<h5>Halaman Data SPP</h5>
<a href="?url=tambah-spp" class="btn btn-primary">Tambah SPP</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Tahun</td>
        <td>Nominal</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM spp ORDER BY id_spp DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['tahun']; ?></td>
        <td><?= 'Rp ' . number_format($data['nominal'], 2, ',', '.'); ?></td>
        <td>
            <a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class="btn btn-warning">EDIT</a>
        </td>
        <td>
            <a onclick="return confirm('Apakah Anda yakin Ingin Menghapus Data?')" href="?url=hapus-spp&id_spp=<?= $data['id_spp'] ?>" class="btn btn-danger">HAPUS</a>
        </td>
    </tr>

   <?php } ?>
</table>
<hr/> <!-- Gunakan sebagai elemen pembatas horizontal -->

<!-- Sertakan script JavaScript atau jQuery jika diperlukan -->

</body>
</html>
