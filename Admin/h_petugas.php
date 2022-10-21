<?php

if($_GET['id_petugas']) {
    set_include_path('/absolute/path/to/SPP/koneksi.php');
    $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
    $qry_hapus = mysqli_query($conn, "delete from petugas where id_petugas = '".$_GET['id_petugas']."'");

    if($qry_hapus) {
        echo "<script>alert('Sukses hapus petugas');location.href='tam_petugas.php';</script>";
    
    } else {
        echo "<script>alert('Gagal hapus petugas');location.href='tam_petugas.php';</script>";
    }

}

?>