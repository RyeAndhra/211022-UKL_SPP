<?php

    session_start();
    if($_POST) {
        set_include_path('/absolute/path/to/SPP/koneksi.php');
        $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
        $qry_bayar = mysqli_query($conn,"select * from pembayaran order by id_pembayaran desc");
        $qry_get_spp = mysqli_query($conn, "select * from spp where id_spp = '".$_GET['id_spp']."'");
        $dt_spp = mysqli_fetch_array($qry_get_spp);
        $nominal = $dt_spp['nominal'];
        $nominal_bayar = $_POST['nominal_bayar'];
        $id_spp = $_GET['id_spp'];
        
        if($nominal_bayar > $dt_spp['nominal']) {
            echo "<script>alert('Nominal terlalu besar!');location.href='/SPP/Petugas/bayar_spp.php?id_spp=".$dt_spp['id_spp']."';</script>";
        } elseif ($nominal_bayar < $dt_spp['nominal']) {
            echo "<script>alert('Apakah anda yakin ingin menyicil SPP?');location.href='/SPP/Petugas/histori_pembayaran.php';</script>";
            $update = mysqli_query($conn, "update pembayaran set tunggakan='".$nominal."' where id_pembayaran = '".$_SESSION['id_pembayaran']."'") or die(mysqli_error($conn));
            $tunggakan = $dt_spp['nominal'] - $nominal_bayar;
            $update = mysqli_query($conn, "update pembayaran set tunggakan='".$tunggakan."' where id_pembayaran = '".$_SESSION['id_pembayaran']."'") or die(mysqli_error($conn));
            $spp = mysqli_query($conn, "update spp set nominal='".$tunggakan."' where id_spp = '".$_GET['id_spp']."'") or die(mysqli_error($conn));
            
        } elseif ($nominal_bayar == $dt_spp['nominal']) {
            echo "<script>alert('Pembayaran Lunas!');location.href='/SPP/Petugas/histori_pembayaran.php';</script>";
            $tunggakan = $dt_spp['nominal'] - $nominal_bayar;
            $update = mysqli_query($conn, "update pembayaran set tunggakan='".$tunggakan."' where id_pembayaran = '".$_SESSION['id_pembayaran']."'") or die(mysqli_error($conn));
        } else {
            echo "<script>alert('Gagal memproses pembayaran.');location.href='/SPP/Petugas/bayar_spp.php?id_spp=".$dt_spp['id_spp']."';</script>";
        }
    }

?>