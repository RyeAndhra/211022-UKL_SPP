<?php

    if($_POST) {

        $angkatan = $_POST['angkatan'];
        $tahun = $_POST['tahun'];
        $nominal = $_POST['nominal'];

        if(empty($tahun)) {
            echo "<script>alert('Tahun tidak boleh kosong');location.href='t_spp.php';</script>";

        } elseif(empty($nominal)) {
            echo "<script>alert('Nominal tidak boleh kosong');location.href='t_spp.php';</script>";

        } else {
            set_include_path('/absolute/path/to/SPP/koneksi.php');
            $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
            $insert = mysqli_query($conn, "insert into spp (angkatan, tahun, nominal) value ('".$angkatan."','".$tahun."','".$nominal."')") or die(mysqli_error($conn));

            if($insert) {
                echo "<script>alert('Sukses menambahkan data');location.href='t_spp.php';</script>";
                header("location:/SPP/Admin/tam_spp.php");

            } else {
                echo "<script>alert('Gagal menambahkan data');location.href='t_spp.php';</script>";
            }
        }
    }

?>