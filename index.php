<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rental Mobilku ID</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <?php
  include("konek.php");
  session_start();
  if (empty(isset($_SESSION["username"]))) {
    header("Location:login.php");
    exit();
  }
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Rental Mobilku ID</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?x=order">Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?x=mobil">Mobil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?x=admin">Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?x=karyawan">Karyawan</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Laporan
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Mobil</a></li>
                    <li><a class="dropdown-item" href="#">Admin</a></li>
                  </ul>
                <li class="nav-item">
                  <a class="nav-link" href="?x=keluar">Keluar</a>
                </li>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-4">
        <!-- Sidebar -->
        <h4>Mobil Ready</h4>
        <ul class="list-group list-group-flush">
          <?Php
          $cari = mysqli_query($konek, "select * from mobil where s_mobil='Tersedia'");
          while ($data = mysqli_fetch_array($cari)) {
            ?>
            <li class="list-group-item">
              <?php echo $data['merk'] . " " . $data['tahun'] . " - " . $data['no_polisi'] ?>
            </li>
            <?php
          }
          ?>
        </ul>
      </div>
      <div class="col-md-8 px-2">
        <!-- Contain -->
        <?php include("kontrol.php"); ?>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-12 " style="background-color: #f0f0f0;">
        <b>
          <p class="text-center">Rental Mobilku ID&copy;2023</p>

        </b>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>