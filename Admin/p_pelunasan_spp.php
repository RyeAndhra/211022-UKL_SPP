<?php

    session_start();

        set_include_path('/absolute/path/to/SPP/koneksi.php');
        $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
        $qry_bayar = mysqli_query($conn,"select * from pembayaran order by id_pembayaran desc");
        $qry_get_spp = mysqli_query($conn, "select * from spp where id_spp = '".$_GET['id_spp']."'");
        $dt_spp = mysqli_fetch_array($qry_get_spp);
        $nominal_bayar = $_POST['nominal_bayar'];
        $id_spp = $_GET['id_spp'];
        
        $tunggakan = 0;
        $nominal = 0;
        $update = mysqli_query($conn, "update pembayaran set tunggakan='".$tunggakan."' where id_pembayaran = '".$_SESSION['id_pembayaran']."'") or die(mysqli_error($conn));
        $spp = mysqli_query($conn, "update spp set nominal='".$nominal."' where id_spp = '".$_GET['id_spp']."'") or die(mysqli_error($conn));
        echo "<script>alert('Pembayaran Lunas!');location.href='/SPP/Admin/histori_pembayaran.php';</script>";
        header("location:/SPP/Admin/histori_pembayaran.php");


?>