<?php

    if($_POST) {

        $nama_kelas = $_POST['nama_kelas'];
        $jurusan = $_POST['jurusan'];
        $angkatan = $_POST['angkatan'];
        $id_kelas = $_POST['id_kelas'];

        if(empty($nama_kelas)) {
            echo "<script>alert('Nama Kelas tidak boleh kosong');location.href='u_kelas.php?id_kelas=".$id_kelas."';</script>";

        } elseif(empty($jurusan)) {
            echo "<script>alert('Jurusan tidak boleh kosong');location.href='u_kelas.php?id_kelas=".$id_kelas."';</script>";

        } elseif(empty($angkatan)) {
            echo "<script>alert('Angkatan tidak boleh kosong');location.href='u_kelas.php?id_kelas=".$id_kelas."';</script>";

        } else {
            set_include_path('/absolute/path/to/SPP/koneksi.php');
            $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
            $update = mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."', jurusan='".$jurusan."', angkatan='".$angkatan."' where id_kelas = '".$id_kelas."'") or die(mysqli_error($conn));
            if($update) {
                echo "<script>alert('Sukses update kelas');location.href='tam_kelas.php';</script>";

            } else {
                echo "<script>alert('Gagal update kelas');location.href='u_kelas.php?id_kelas=".$id_kelas."';</script>";
            }
        }
    }

?>