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
    if ($_SESSION['level'] == "SUPER") {
        include("konek.php");
        $cari = mysqli_query($konek, "select * from karyawan") or die(mysqli_error());
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>No hp</th>
                    <th>Jabatan</th>
                    <th>Status</th>

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
                            <?php echo $data['nama']; ?>
                        </td>
                        <td>
                            <?php echo $data['hp']; ?>
                        </td>
                        <td>
                            <?php echo $data['jabatan']; ?>
                        </td>
                        <td>
                            <a href="?x=hkaryawanl&id=<?php echo $data['id_karyawan']; ?>" class="btn btn-danger">Hapus</a>
                            <a href="?x=ekaryawan&id=<?php echo $data['id_karyawan']; ?>" class="btn btn-warning">Ubah</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
                <?php
    } else { ?>
                <script type="text/javascript">
                    alert("Level ADMIN tidak boleh masuk");
                    window.location = "index.php";
                </script>
                <?php
    }
    ?>
        </tbody>
    </table>
    <a href="?x=tkaryawan" class="btn btn-primary">Tambah</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>