<?php

    if($_POST) {

        $id_petugas = $_POST['id_petugas'];
        $nisn = $_POST['nisn'];
        $tgl_bayar = $_POST['tgl_bayar'];
        $tunggakan = $_POST['tunggakan'];
        
        set_include_path('/absolute/path/to/SPP/koneksi.php');
        $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
        $insert = mysqli_query($conn, "insert into pembayaran (id_petugas, nisn, tgl_bayar, tunggakan) value ('".$id_petugas."','".$nisn."','".$tgl_bayar."','".$tunggakan."')") or die(mysqli_error($conn));
        $proses_siswa = mysqli_query($conn,"select * from siswa where nisn = '".$nisn."' and angkatan=siswa.angkatan");
        $proses_bayar = mysqli_query($conn,"select * from pembayaran  order by id_pembayaran desc");

        if(mysqli_num_rows($proses_siswa) > 0) {

            $dtp_siswa = mysqli_fetch_assoc($proses_siswa);
            $dtp_bayar = mysqli_fetch_array($proses_bayar);
            session_start();
            $_SESSION['id_petugas'] = $dtp_siswa['id_petugas'];
            $_SESSION['id_pembayaran'] = $dtp_bayar['id_pembayaran'];
            $_SESSION['nisn'] = $dtp_siswa['nisn'];
            $_SESSION['tgl_bayar'] = $dtp_bayar['tgl_bayar'];
            $_SESSION['angkatan'] = $dtp_siswa['angkatan'];

            if($dtp_siswa['angkatan'] == "29") {

                $_SESSION['nisn'] = $nisn;
                $_SESSION['angkatan'] = "29";
        
                header("location:/SPP/Petugas/spp.php");
        
            } else if($dtp_siswa['angkatan'] == "30") {
        

                $_SESSION['nisn'] = $nisn;
                $_SESSION['angkatan'] = "30";
        
                header("location:/SPP/Petugas/spp.php");
        
            } else if($dtp_siswa['angkatan'] == "31") {
        

                $_SESSION['nisn'] = $nisn;
                $_SESSION['angkatan'] = "31";
        
                header("location:/SPP/Petugas/spp.php");
        
            } else {
                echo "<script>alert('Gagal memproses pembayaran');location.href='/SPP/Petugas/pembayaran.php';</script>";
            }
            
        } else {
            echo "<script>alert('Gagal memproses pembayaran');location.href='/SPP/Petugas/pembayaran.php';</script>";
        }
    }

?>