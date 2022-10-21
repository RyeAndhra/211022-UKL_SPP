<?php

    if($_POST) {

        $angkatan = $_POST['angkatan'];
        $tahun = $_POST['tahun'];
        $nominal = $_POST['nominal'];
        $id_spp = $_POST['id_spp'];

        if(empty($tahun)) {
            echo "<script>alert('Tahun tidak boleh kosong');location.href='u_spp.php?id_spp=".$id_spp."';</script>";

        } elseif(empty($nominal)) {
            echo "<script>alert('Nominal tidak boleh kosong');location.href='u_spp.php?id_spp=".$id_spp."';</script>";

        } else {
            set_include_path('/absolute/path/to/SPP/koneksi.php');
            $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
            $update = mysqli_query($conn,"update spp set angkatan='".$angkatan."', tahun='".$tahun."', nominal='".$nominal."' where id_spp = '".$id_spp."'") or die(mysqli_error($conn));
            if($update) {
                echo "<script>alert('Sukses update data');location.href='tam_spp.php';</script>";

            } else {
                echo "<script>alert('Gagal update data');location.href='u_spp.php?id_spp=".$id_spp."';</script>";
            }
        }
    }

?>