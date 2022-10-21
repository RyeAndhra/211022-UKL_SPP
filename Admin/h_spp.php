<?php

if($_GET['id_spp']) {
    set_include_path('/absolute/path/to/SPP/koneksi.php');
    $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
    $qry_hapus = mysqli_query($conn, "delete from spp where id_spp = '".$_GET['id_spp']."'");

    if($qry_hapus) {
        echo "<script>alert('Sukses hapus data');location.href='tam_spp.php';</script>";
    
    } else {
        echo "<script>alert('Gagal hapus data');location.href='tam_spp.php';</script>";
    }

}

?>