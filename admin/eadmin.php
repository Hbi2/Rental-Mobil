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
            <h5>Ubah Data Admin</h5>
        </div>
        <div class="card-body">
            <form method="post" action="?x=uadmin">
                <?php
                include("konek.php");
                $id = $_GET["id"];
                $cari = mysqli_query($konek, "select * from admin where id_admin='$id'") or die(mysqli_error());
                $data = mysqli_fetch_array($cari);
                ?>
                <input type="hidden" name="kode" value="<?php echo $data["id_admin"]; ?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="txtNama" value="<?php echo $data["nama_admin"]; ?>">
                </div>

                <div class="form-group">
                    <label>Jenis kelamin</label>
                    <select name="kelamin" class="form-control">
                        <option value="<?php echo $data['jenkel_admin']; ?>"></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="txtUsername" value="<?php echo $data['username']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="txtPassword"
                        value="<?php echo $data['password']; ?>">
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control">
                        <option value="<?php echo $data['level']; ?>"></option>
                        <option value="Admin">Admin</option>
                        <option value="Super">Super</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Simpan</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>