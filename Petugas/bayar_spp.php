<!DOCTYPE html>

<?php 

  include "header.php";

?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Read SPP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/SPP/Assets/img/favicon.png" rel="icon">
  <link href="/SPP/Assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/SPP/Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/SPP/Assets/css/style.css" rel="stylesheet">

</head>

<body>

  <?php

    include "navbar.php";

  ?>

  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Pembayaran SPP</h1>
        <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Pembayaran</li>
        </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">

            <?php

                set_include_path('/absolute/path/to/SPP/koneksi.php');
                $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
                $qry_bayar = mysqli_query($conn,"select * from pembayaran");
                $qry_siswa = mysqli_query($conn,"select * from siswa where nisn = '".$_SESSION['nisn']."'");
                $qry_spp = mysqli_query($conn,"select * from spp where id_spp = '".$_GET['id_spp']."'");
                $dt_spp = mysqli_fetch_array($qry_spp);
                $data_siswa = mysqli_fetch_array($qry_siswa);
                $data_bayar = mysqli_fetch_array($qry_bayar);
                
            ?>

            <div class="col-lg-6">
              <div div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?=$_SESSION['level']?> : <?=$_SESSION['username']?> | <?=$_SESSION['nama_petugas']?></h5>
                  <p><strong>- Data Siswa -</strong></p>
                  <p>Nama : <?=$data_siswa['nama'];?> (<?=$data_siswa['nisn'];?>)</p>
                  <p>Angkatan : <?=$data_siswa['angkatan'];?></p>
                  <p>Tanggal Pembayaran : <?=$data_bayar['tgl_bayar'];?></p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div div class="card">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h1 class="card-title text-center pb-0 fs-4">Proses Pembayaran SPP Angkatan <?=$dt_spp['angkatan']?></h1>
                    <p class="text-center small">Status : Belum Lunas</p>
                  </div>
                  <p>Tahun : <?=$dt_spp['tahun']?></p>
                  <p>Nominal : <?=$dt_spp['nominal']?></p>
                  <form action="p_bayar_spp.php?id_spp=<?=$dt_spp['id_spp']?>" method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="nominal_bayar" class="form-label">Masukkan nominal pembayaran...</label>
                      <div class="input-group has-validation">
                        <input type="number" name="nominal_bayar" class="form-control" id="nominal_bayar" value="" required>
                        <button class="btn btn-primary" type="submit">Pay</button>
                        <div class="invalid-feedback">Please enter Nominal Pembayaran.</div>
                      </div>
                      
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </section>

  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php

    include "footer.php";

  ?>

  <!-- Vendor JS Files -->
  <script src="/SPP/Assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/SPP/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/SPP/Assets/vendor/chart.js/chart.min.js"></script>
  <script src="/SPP/Assets/vendor/echarts/echarts.min.js"></script>
  <script src="/SPP/Assets/vendor/quill/quill.min.js"></script>
  <script src="/SPP/Assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/SPP/Assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/SPP/Assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/SPP/Assets/js/main.js"></script>

</body>

</html><!DOCTYPE html>

<?php 

  include "header.php";

?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Read SPP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/SPP/Assets/img/favicon.png" rel="icon">
  <link href="/SPP/Assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/SPP/Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/SPP/Assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/SPP/Assets/css/style.css" rel="stylesheet">

</head>

<body>

  <?php

    include "navbar.php";

  ?>

  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Pembayaran SPP</h1>
        <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Pembayaran</li>
        </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">

            <?php

                set_include_path('/absolute/path/to/SPP/koneksi.php');
                $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
                $qry_bayar = mysqli_query($conn,"select * from pembayaran");
                $qry_siswa = mysqli_query($conn,"select * from siswa where nisn = '".$_SESSION['nisn']."'");
                $qry_spp = mysqli_query($conn,"select * from spp where id_spp = '".$_GET['id_spp']."'");
                $dt_spp = mysqli_fetch_array($qry_spp);
                $data_siswa = mysqli_fetch_array($qry_siswa);
                $data_bayar = mysqli_fetch_array($qry_bayar);
                
            ?>

            <div class="col-lg-6">
              <div div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?=$_SESSION['level']?> : <?=$_SESSION['username']?> | <?=$_SESSION['nama_petugas']?></h5>
                  <p><strong>- Data Siswa -</strong></p>
                  <p>Nama : <?=$data_siswa['nama'];?> (<?=$data_siswa['nisn'];?>)</p>
                  <p>Angkatan : <?=$data_siswa['angkatan'];?></p>
                  <p>Tanggal Pembayaran : <?=$data_bayar['tgl_bayar'];?></p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div div class="card">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h1 class="card-title text-center pb-0 fs-4">Proses Pembayaran SPP Angkatan <?=$dt_spp['angkatan']?></h1>
                    <p class="text-center small">Status : Belum Lunas</p>
                  </div>
                  <p>Tahun : <?=$dt_spp['tahun']?></p>
                  <p>Nominal : <?=$dt_spp['nominal']?></p>
                  <form action="p_bayar_spp.php?id_spp=<?=$dt_spp['id_spp']?>" method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="nominal_bayar" class="form-label">Masukkan nominal pembayaran...</label>
                      <div class="input-group has-validation">
                        <input type="number" name="nominal_bayar" class="form-control" id="nominal_bayar" value="" required>
                        <button class="btn btn-primary" type="submit">Pay</button>
                        <div class="invalid-feedback">Please enter Nominal Pembayaran.</div>
                      </div>
                      
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </section>

  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php

    include "footer.php";

  ?>

  <!-- Vendor JS Files -->
  <script src="/SPP/Assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/SPP/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/SPP/Assets/vendor/chart.js/chart.min.js"></script>
  <script src="/SPP/Assets/vendor/echarts/echarts.min.js"></script>
  <script src="/SPP/Assets/vendor/quill/quill.min.js"></script>
  <script src="/SPP/Assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/SPP/Assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/SPP/Assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/SPP/Assets/js/main.js"></script>

</body>

</html>