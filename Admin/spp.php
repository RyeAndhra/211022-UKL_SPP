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
          $qry_bayar = mysqli_query($conn,"select * from pembayaran order by id_pembayaran desc");
          $qry_siswa = mysqli_query($conn,"select * from siswa where nisn = '".$_SESSION['nisn']."'");
          $data_siswa = mysqli_fetch_array($qry_siswa);
          $data_bayar = mysqli_fetch_array($qry_bayar);
            
        ?>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?=$_SESSION['level']?> : <?=$_SESSION['username']?> | <?=$_SESSION['nama_petugas']?></h5>
              <p><strong>- Data Siswa -</strong></p>
              <p>Nama : <?=$data_siswa['nama'];?> (<?=$data_siswa['nisn'];?>)</p>
              <p>Angkatan : <?=$_SESSION['angkatan']?></p>
              <p>Tanggal Pembayaran : <?=$data_bayar['tgl_bayar'];?></p>
            </div>
          </div>
        </div>
      </div>
        
      <div class="pagetitle">
        <h1>Select SPP</h1>
      </div>
      
      <div class="row">

        <?php

          set_include_path('/absolute/path/to/SPP/koneksi.php');
          $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
          $qry_spp = mysqli_query($conn,"select * from spp where spp.angkatan = '".$_SESSION['angkatan']."'");
          while($data_spp = mysqli_fetch_array($qry_spp)) {
            if(mysqli_num_rows($qry_spp) > 0 && $data_spp['nominal'] == 0) {
              $button_pembayaran = "";
            } else {
              $button_pembayaran = "<a href='bayar_spp.php?id_spp=".$data_spp['id_spp']."' class='btn btn-primary btn-sm' title='SPP Payment'>Select SPP</a>";
            }
            
        ?>

            <div class="col-lg-6">
                <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Angkatan <?=$data_spp['angkatan'];?></h5>
                  <p>Tahun : <?=$data_spp['tahun'];?></p>
                  <p>Nominal : <?=$data_spp['nominal'];?></p>
                  <?=$button_pembayaran?>
                </div>
                
                </div>
            </div>

        <?php

            }

        ?>

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