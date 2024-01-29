<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include("konek.php");
    $cari = mysqli_query($konek, "select * from mobil");
    ?>
    <div class="card w-50">
        <div class="card-header">
            <h5>Tambah Data Order</h5>
        </div>
        <div class="card-body">
            <form method="post" action="?x=sorder">
                <div class="form-group">
                    <label>Nomor Polisi</label>
                    <select name="polisi" class="form-control">
                        <option value="">--Pilih--</option>
                        <?php
                        while ($data = mysqli_fetch_array($cari)) {
                            ?>
                            <option value="<?php echo $data['id_mobil']; ?>">
                                <?php echo $data['no_polisi'] . " - " . $data['merk']; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nomor KTP</label>
                    <input type="text" class="form-control" name="txtKtp">
                    <div class="form-group">
                        <label>Nama Peminjam</label>
                        <input type="text" class="form-control" name="txtNama">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenkel" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat Peminjam</label>
                        <input type="text" class="form-control" name="txtAlamat">
                    </div>
                    <div class="form-group">
                        <label>No Telphone/Handphone</label>
                        <input type="text" class="form-control" name="txtTlp">
                    </div>
                    <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" class="form-control" name="txtTujuan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="txtMulai">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" class="form-control" name="txtSelesai">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Tambah</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>