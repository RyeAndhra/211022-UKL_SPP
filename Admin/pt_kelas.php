<?php

    if($_POST) {

        $nama_kelas = $_POST['nama_kelas'];
        $jurusan = $_POST['jurusan'];
        $angkatan = $_POST['angkatan'];

        if(empty($nama_kelas)) {
            echo "<script>alert('Nama Kelas tidak boleh kosong');location.href='t_kelas.php';</script>";

        } elseif(empty($jurusan)) {
            echo "<script>alert('Jurusan tidak boleh kosong');location.href='t_kelas.php';</script>";

        } elseif(empty($angkatan)) {
            echo "<script>alert('Angkatan tidak boleh kosong');location.href='t_kelas.php';</script>";

        } else {
            set_include_path('/absolute/path/to/SPP/koneksi.php');
            $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
            $insert = mysqli_query($conn, "insert into kelas (nama_kelas, jurusan, angkatan) value ('".$nama_kelas."','".$jurusan."','".$angkatan."')") or die(mysqli_error($conn));

            if($insert) {
                echo "<script>alert('Sukses menambahkan kelas');location.href='t_kelas.php';</script>";
                header("location:/SPP/Admin/tam_kelas.php");

            } else {
                echo "<script>alert('Gagal menambahkan kelas');location.href='t_kelas.php';</script>";
            }
        }
    }

?>