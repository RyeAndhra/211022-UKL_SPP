<?php

if($_GET['nisn']) {
    set_include_path('/absolute/path/to/SPP/koneksi.php');
    $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
    $qry_hapus = mysqli_query($conn, "delete from siswa where nisn = '".$_GET['nisn']."'");

    if($qry_hapus) {
        echo "<script>alert('Sukses hapus siswa');location.href='tam_siswa.php';</script>";
    
    } else {
        echo "<script>alert('Gagal hapus siswa');location.href='tam_siswa.php';</script>";
    }

}

?>