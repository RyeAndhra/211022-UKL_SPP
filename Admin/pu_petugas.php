<?php

    if($_POST) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_petugas = $_POST['nama_petugas'];
        $level = $_POST['level'];
        $id_petugas = $_POST['id_petugas'];

        if(empty($username)) {
            echo "<script>alert('Username tidak boleh kosong');location.href='u_petugas.php?id_petugas=".$id_petugas."';</script>";

        } elseif(empty($nama_petugas)) {
            echo "<script>alert('Nama Petugas tidak boleh kosong');location.href='u_petugas.php?id_petugas=".$id_petugas."';</script>";

        } else {
            set_include_path('/absolute/path/to/SPP/koneksi.php');
            $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
            if(empty($password)) {
                $update = mysqli_query($conn, "update petugas set username='".$username."', nama_petugas = '".$nama_petugas."', level='".$level."' where id_petugas = '".$id_petugas."'") or die(mysqli_error($conn));
                if($update) {
                    echo "<script>alert('Sukses update petugas');location.href='tam_petugas.php';</script>";
    
                } else {
                    echo "<script>alert('Gagal update petugas');location.href='u_petugas.php?id_petugas=".$id_petugas."';</script>";
                }
    
            } else {
                $update = mysqli_query($conn,"update petugas set username='".$username."', password='".md5($password)."', nama_petugas = '".$nama_petugas."', level='".$level."' where id_petugas = '".$id_petugas."'") or die(mysqli_error($conn));
                if($update) {
                    echo "<script>alert('Sukses update petugas');location.href='tam_petugas.php';</script>";
    
                } else {
                    echo "<script>alert('Gagal update petugas');location.href='u_petugas.php?id_petugas=".$id_petugas."';</script>";
                }
            }
        }
    }

?>