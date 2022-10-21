<?php

    if($_POST) {

        $nisn = $_POST['nisn'];
        $nis = $_POST['nis'];
        $nama_siswa = $_POST['nama'];
        $angkatan = $_POST['angkatan'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['no_tlp'];
        $id_kelas = $_POST['id_kelas'];

        if(empty($nisn)) {
            echo "<script>alert('NISN tidak boleh kosong');location.href='t_siswa.php';</script>";

        } elseif(empty($nisn)) {
            echo "<script>alert('NIS tidak boleh kosong');location.href='t_siswa.php';</script>";

        } elseif(empty($nama_siswa)) {
            echo "<script>alert('Nama tidak boleh kosong');location.href='t_siswa.php';</script>";

        } elseif(empty($alamat)) {
            echo "<script>alert('Alamat tidak boleh kosong');location.href='t_siswa.php';</script>";

        } elseif(empty($telp)) {
            echo "<script>alert('No Telepon tidak boleh kosong');location.href='t_siswa.php';</script>";

        } else {
            set_include_path('/absolute/path/to/SPP/koneksi.php');
            $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
            $insert = mysqli_query($conn, "insert into siswa (nisn, nis, nama, angkatan, alamat, no_tlp, id_kelas) value ('".$nis."','".$nisn."','".$nama_siswa."','".$angkatan."','".$alamat."','".$telp."','".$id_kelas."')") or die(mysqli_error($conn));

            if($insert) {
                echo "<script>alert('Sukses menambahkan siswa');location.href='t_siswa.php';</script>";
                header("location:/SPP/Admin/tam_siswa.php");

            } else {
                echo "<script>alert('Gagal menambahkan siswa');location.href='t_siswa.php';</script>";
            }
        }
    }

?>