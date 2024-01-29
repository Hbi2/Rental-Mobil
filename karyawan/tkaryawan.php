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
            <h5>Tambah Karyawan</h5>
        </div>
        <div class="card-body">
            <form method="post" action="?x=skaryawan">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="txtNama">
                </div>
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" class="form-control" name="txtHp">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" name="txtJabatan">
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