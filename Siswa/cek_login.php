<?php

if($_POST) {
    $nama_siswa = $_POST['nama'];
    $nisn = $_POST['nisn'];
    if(empty($nama_siswa)) {
        echo "<script>alert('Nama Siswa tidak boleh kosong');location.href='index.php';</script>";
    
    } elseif(empty($nisn)) {
        echo "<script>alert('NISN tidak boleh kosong');location.href='index.php';</script>";
    
    } else {
        set_include_path('/absolute/path/to/SPP/koneksi.php');
        $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
        $qry_login = mysqli_query($conn, "select * from siswa where nama='".$nama_siswa."' and nisn='".$nisn."'");
        if(mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['nisn'] = $dt_login['nisn'];
            $_SESSION['nis'] = $dt_login['nis'];
            $_SESSION['nama'] = $dt_login['nama'];
            $_SESSION['id_kelas'] = $dt_login['id_kelas'];
            $_SESSION['alamat'] = $dt_login['alamat'];
            $_SESSION['no_tlp'] = $dt_login['no_tlp'];
            $_SESSION['status_login'] = true;
            header("location: dashboard.php");
        
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
        }
    }
}