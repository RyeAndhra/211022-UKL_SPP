<?php

    if($_POST) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_petugas = $_POST['nama_petugas'];
        $level = $_POST['level'];

        if(empty($username)) {
            echo "<script>alert('Username tidak boleh kosong');location.href='t_petugas.php';</script>";

        } elseif(empty($password)) {
            echo "<script>alert('Password tidak boleh kosong');location.href='t_petugas.php';</script>";

        } elseif(empty($nama_petugas)) {
            echo "<script>alert('Nama Petugas tidak boleh kosong');location.href='t_petugas.php';</script>";

        } else {
            set_include_path('/absolute/path/to/SPP/koneksi.php');
            $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
            $insert = mysqli_query($conn, "insert into petugas (username, password, nama_petugas, level) value ('".$username."','".md5($password)."','".$nama_petugas."', '".$level."')") or die(mysqli_error($conn));

            if($insert) {
                echo "<script>alert('Sukses menambahkan petugas');location.href='t_petugas.php';</script>";
                header("location:/SPP/Admin/tam_petugas.php");

            } else {
                echo "<script>alert('Gagal menambahkan petugas');location.href='t_petugas.php';</script>";
            }
        }
    }

?>