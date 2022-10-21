<!DOCTYPE html>

<?php 

  include "header.php";
  set_include_path('/absolute/path/to/SPP/koneksi.php');

?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin History</title>
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

    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Histori Pembayaran</h5>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="row">No</th>
            <th scope="row">Siswa</th>
            <th scope="row">Admin</th>
            <th scope="row">Tanggal Pembayaran</th>
            <th scope="row">SPP</th>
            <th scope="row">Status</th>
            </tr>
        </thead>
        <tbody>

        <?php

            $conn = mysqli_connect('localhost', 'root', '', 'sekolah');
            $qry_histori = mysqli_query($conn, "select * from pembayaran order by id_pembayaran desc");
            $qry_petugas=mysqli_query($conn,"select * from petugas");
            $qry_get_spp = mysqli_query($conn, "select * from spp order by id_spp desc");
            $data_petugas=mysqli_fetch_array($qry_petugas);
            $qry_spp = mysqli_query($conn,"select * from spp");
            $data_spp = mysqli_fetch_array($qry_spp);
            $qry_siswa=mysqli_query($conn,"select * from siswa");
            $data_siswa=mysqli_fetch_array($qry_siswa);
            $no = 0;
            while($dt_histori = mysqli_fetch_array($qry_histori)) {
              $no++;
              $qry_cek_kembali = mysqli_query($conn, "select * from pembayaran inner join siswa on siswa.nisn = pembayaran.nisn where pembayaran.id_pembayaran = '".$dt_histori['id_pembayaran']."'");
              $qry_cek_kembali_petugas = mysqli_query($conn, "select * from pembayaran inner join petugas on petugas.id_petugas = pembayaran.id_petugas where pembayaran.id_pembayaran = '".$dt_histori['id_pembayaran']."'");
              $dt_kembali = mysqli_fetch_array($qry_cek_kembali);
              $dt_kembali_petugas = mysqli_fetch_array($qry_cek_kembali_petugas);
              if(mysqli_num_rows($qry_cek_kembali) > 0 && $dt_kembali['tunggakan'] == 0) {
                $tunggakan = "Tunggakan Rp. ".$dt_kembali['tunggakan'];
                $status_pembayaran = "<label class='alert alert-success'>Sudah Lunas. <br>".$tunggakan."</label>";
                $button_pembayaran = "<button type='button' class='btn btn-primary' onclick='window.print()'>Laporan</button>";

              } else {
                $tunggakan = "Tunggakan Rp. ".$dt_kembali['tunggakan'];
                $status_pembayaran = "<label class='alert alert-danger'>Belum Lunas! <br>".$tunggakan."</label>";
                $button_pembayaran = "<a href='p_pelunasan_spp.php?id_spp=".$data_spp['id_spp']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin ingin melunaskan tunggakan?\")'>Bayar</a>";
              }

        ?>

        <tr>
        <td><?=$no?></td>
        <td><?=$dt_kembali['nama']?></td>
        <td><?=$dt_kembali_petugas['nama_petugas']?></td>
        <td><?=$dt_histori['tgl_bayar']?></td>
        <td>Angkatan <?=$dt_kembali['angkatan']?></td>
        <td><?=$status_pembayaran?></td>
        </tr>

      <?php

        }

      ?>
    
        </tbody>
        </table>
        <a href='histori_pembayaran.php' class='btn btn-primary'>Done</a>
    </div>
    </div>
    <script>
		  window.print();
	  </script>
    

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



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