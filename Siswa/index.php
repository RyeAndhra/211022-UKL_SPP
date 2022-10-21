<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
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
                    <a href="/SPP/index.php" class="logo d-flex align-items-center w-auto">
                        <img src="/SPP/assets/img/logo.png" alt="">
                        <span class="d-none d-lg-block">Sekolah - SPP</span>
                    </a>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login as Siswa</h5>
                        <p class="text-center small">Enter your Name & NISN to login</p>
                    </div>
                    <form action="cek_login.php" method="post" class="row g-3 needs-validation" novalidate>
                        <div class="col-12">
                        <label for="nama" class="form-label">Student Name</label>
                        <div class="input-group has-validation">
                            <input type="text" name="nama" class="form-control" id="nama" value="" required>
                            <div class="invalid-feedback">Please enter your Name.</div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="number" name="nisn" class="form-control" id="nisn" required>
                        <div class="invalid-feedback">Please enter your NISN!</div>
                        </div>

                        <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
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