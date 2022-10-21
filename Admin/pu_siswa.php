<?php

    if($_POST) {

        $nisn = $_POST['nisn'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $angkatan = $_POST['angkatan'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['no_tlp'];
        $id_kelas = $_POST['id_kelas'];

        if(empty($nisn)) {
            echo "<script>alert('NISN tidak boleh kosong');location.href='t_siswa.php?nisn=".$nisn."';</script>";

        } elseif(empty($nisn)) {
            echo "<script>alert('NIS tidak boleh kosong');location.href='t_siswa.php?nisn=".$nisn."';</script>";

        } elseif(empty($nama)) {
            echo "<script>alert('Nama tidak boleh kosong');location.href='t_siswa.php?nisn=".$nisn."';</script>";

        } elseif(empty($alamat)) {
            echo "<script>alert('Alamat tidak boleh kosong');location.href='t_siswa.php?nisn=".$nisn."';</script>";

        } elseif(empty($telp)) {
            echo "<script>alert('No Telepon tidak boleh kosong');location.href='t_siswa.php?nisn=".$nisn."';</script>";

        } else {
            set_include_path('/absolute/path/to/SPP/koneksi.php');
            $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
            $update = mysqli_query($conn,"update siswa set nis='".$nis."', nama='".$nama."', angkatan='".$angkatan."', id_kelas='".$id_kelas."', alamat='".$alamat."', no_tlp='".$telp."' where nisn='".$nisn."'") or die(mysqli_error($conn));
            if($update) {
                echo "<script>alert('Sukses update siswa');location.href='tam_siswa.php';</script>";

            } else {
                echo "<script>alert('Gagal update siswa');location.href='u_siswa.php?nisn=".$nisn."';</script>";
            }
        }
    }


?>