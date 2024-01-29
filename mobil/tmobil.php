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
    <div class="card w-50">
        <div class="card-header">
            <h5>Tambah Mobil</h5>
        </div>
        <div class="card-body">
            <form method="post" action="?x=smobil">
                <div class="form-group">
                    <label>Nomor Polisi</label>
                    <input type="text" class="form-control" name="txtPolisi">
                </div>
                <div class="form-group">
                    <label>Merk</label>
                    <input type="text" class="form-control" name="txtMerk">
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" class="form-control" name="txtTahun">
                    </div>
                    <div class="form-group">
                        <label>Harga/Hari</label>
                        <input type="text" class="form-control" name="txtHarga">
                    </div>
                    <div class="form-group">
                        <label>Status Mobil</label>
                        <select name="status" class="form-control">
                            <option value="Tersedia">Tersedia</option>
                            <option value="TidakTersedia">Tidak Tersedia</option>
                        </select>
                        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Tambah</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>