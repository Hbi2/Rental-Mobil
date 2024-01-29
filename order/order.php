<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include("konek.php");
    $cari = mysqli_query($konek, "select * from mobil,sewa where mobil.id_mobil=sewa.id_mobil") or die(mysqli_error());
    ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>No Polisi</th>
                <th>Merk</th>
                <th>Nama Peminjam</th>
                <th>Tujuan Peminjam</th>
                <th>Tgl Mulai Order</th>
                <th>Tgl Selesai Order</th>
                <th>Total harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($cari)) {
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $no; ?>
                    </th>
                    <td>
                        <?php echo $data['no_polisi']; ?>
                    </td>
                    <td>
                        <?php echo $data['merk']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_order']; ?>
                    </td>
                    <td>
                        <?php echo $data['tujuan']; ?>
                    </td>
                    <td>
                        <?php echo $data['tgl_order']; ?>
                    </td>
                    <td>
                        <?php echo $data['tgl_kembali']; ?>
                    </td>
                    <td>
                        <?php echo $data['harga_total']; ?>
                    </td>
                    <td>
                        <a href="?x=horder&id=<?php echo $data['id_sewa']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?>
        </tbody>
    </table>

    <a href="?x=torder" class="btn btn-primary">Tambah Order</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>