<!DOCTYPE html>

<?php 

  include "header.php";
  set_include_path('/absolute/path/to/SPP/koneksi.php');

?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Payment</title>
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
      <h1>Admin Payment Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Pembayaran</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
          <div class="card-body">
            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Entri Transaksi Pembayaran</h5>
              <p class="text-center small">Data <?=$_SESSION['level']?> : <?=$_SESSION['username']?> | <?=$_SESSION['nama_petugas']?></p>
            </div>
            <form action="p_pembayaran.php" method="post" class="row g-3 needs-validation" novalidate>
              <div class="col-12">
                <label for="id_petugas" class="form-label">Petugas</label>
                <div class="input-group has-validation">
                  <select name="id_petugas" class="form-control" id="id_petugas" value="" required>
                    <option></option>

                    <?php 

                      $conn = mysqli_connect('localhost', 'root', '', 'sekolah');
                      $qry_petugas=mysqli_query($conn,"select * from petugas");
                      while($data_petugas=mysqli_fetch_array($qry_petugas)){
                        echo'<option value="'.$data_petugas['id_petugas'].'">'.$data_petugas['nama_petugas'].'</option>';
                      }

                    ?>

                  </select>
                  <div class="invalid-feedback">Please select Student Name.</div>
                </div>
              </div>
              
              <div class="col-12">
                <label for="nisn" class="form-label">NISN / Student Name</label>
                <div class="input-group has-validation">
                  <select name="nisn" class="form-control" id="nisn" value="" required>
                    <option></option>

                    <?php 

                      $conn = mysqli_connect('localhost', 'root', '', 'sekolah');
                      $qry_siswa=mysqli_query($conn,"select * from siswa");
                      while($data_siswa=mysqli_fetch_array($qry_siswa)){
                        echo'<option value="'.$data_siswa['nisn'].'">'.$data_siswa['nama'].' - Angkatan '.$data_siswa['angkatan'].'</option>';   
                      }

                    ?>

                  </select>
                  <div class="invalid-feedback">Please select Student Name.</div>
                </div>
              </div>

              <div class="col-12">
                <label for="tgl_bayar" class="form-label">Payment Date</label>
                <div class="input-group has-validation">
                  <input type="date" name="tgl_bayar" class="form-control" id="tgl_bayar" value="" required>
                  <div class="invalid-feedback">Please enter Payment Date.</div>
                </div>
              </div>

              <input type="hidden" name="tunggakan" value="600000">

              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Pay</button>
              </div>
            </form>
          </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
          <div class="card-body">
            <h5 class="card-title">Recent Activity</h5>
            <p></p>
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