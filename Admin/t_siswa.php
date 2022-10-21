<!DOCTYPE html>

<?php

    include "header.php";
    set_include_path('/absolute/path/to/SPP/koneksi.php');

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Create Siswa</title>
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

    <main>

        <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex justify-content-center py-4">
                    <a href="dashboard.php" class="logo d-flex align-items-center w-auto">
                        <img src="/SPP/assets/img/logo.png" alt="">
                        <span class="d-none d-lg-block">Sekolah - SPP</span>
                    </a>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create Siswa</h5>
                        <p class="text-center small">Enter siswa information</p>
                    </div>
                    <form action="pt_siswa.php" method="post" class="row g-3 needs-validation" novalidate>
                        <div class="col-12">
                        <label for="nisn" class="form-label">NISN</label>
                        <div class="input-group has-validation">
                            <input type="number" name="nisn" class="form-control" id="nisn" value="" required>
                            <div class="invalid-feedback">Please enter NISN.</div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="nis" class="form-label">NIS</label>
                        <div class="input-group has-validation">
                            <input type="number" name="nis" class="form-control" id="nis" value="" required>
                            <div class="invalid-feedback">Please enter NIS.</div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="nama" class="form-label">Student Name</label>
                        <div class="input-group has-validation">
                            <input type="text" name="nama" class="form-control" id="nama" value="" required>
                            <div class="invalid-feedback">Please enter Name.</div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="class" class="form-label">Class</label>
                        <div class="input-group has-validation">
                            <select name="id_kelas" class="form-control" id="class" value="" required>
                                <option></option>

                            <?php 

                                $conn = mysqli_connect('localhost', 'root', '', 'sekolah');
                                $qry_kelas=mysqli_query($conn,"select * from kelas");
                                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                    echo'<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';   
                                }

                            ?>

                            </select>
                            <div class="invalid-feedback">Please select Class.</div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <div class="input-group has-validation">
                            <select name="angkatan" class="form-control" id="angkatan" value="" required>
                                <option></option>

                            <?php 

                                $qry_angkatan=mysqli_query($conn,"select * from kelas");
                                while($data_angkatan=mysqli_fetch_array($qry_angkatan)){
                                    echo'<option value="'.$data_angkatan['angkatan'].'">'.$data_angkatan['angkatan'].'</option>';   
                                }

                            ?>

                            </select>
                            <div class="invalid-feedback">Please select Angkatan.</div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="alamat" class="form-label">Address</label>
                        <div class="input-group has-validation">
                            <textarea name="alamat" class="form-control" id="alamat"  rows="4" required></textarea>
                            <div class="invalid-feedback">Please enter Address.</div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="no_tlp" class="form-label">Phone Number</label>
                        <div class="input-group has-validation">
                            <input type="number" name="no_tlp" class="form-control" id="no_tlp" value="" required>
                            <div class="invalid-feedback">Please enter Phone Number.</div>
                        </div>
                        </div>

                        <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Create</button>
                        </div>
                    </form>
                    </div>
                </div>

                <div class="credits">
                    Re-Designed by <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Raiandhra Cyostra</a>
                </div>

                </div>
            </div>
            </div>

        </section>
        </div>

    </main>

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