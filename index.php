<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Assets/img/favicon.png" rel="icon">
    <link href="Assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="Assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="Assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="Assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="Assets/css/style.css" rel="stylesheet">

</head>

<body>

    <main>

        <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex justify-content-center py-4">
                    <a href="index.php" class="logo d-flex align-items-center w-auto">
                        <img src="assets/img/logo.png" alt="">
                        <span class="d-none d-lg-block">Sekolah - SPP</span>
                    </a>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                        <p class="text-center small">Enter your username & password to login</p>
                    </div>
                    <form action="cek_login.php" method="post" class="row g-3 needs-validation" novalidate>
                        <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="username" value="" required>
                            <div class="invalid-feedback">Please enter your Username.</div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <div class="invalid-feedback">Please enter your Password!</div>
                        </div>

                        <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                        </div>

                        <div class="col-12">
                            <p align="center" class="small mb-0"><a href="/SPP/Siswa/index.php">Login sebagai Siswa</a></p>
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
    <script src="Assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/vendor/chart.js/chart.min.js"></script>
    <script src="Assets/vendor/echarts/echarts.min.js"></script>
    <script src="Assets/vendor/quill/quill.min.js"></script>
    <script src="Assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="Assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="Assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="Assets/js/main.js"></script>

</body>

</html>