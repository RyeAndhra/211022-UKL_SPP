<?php 

    if($_POST) {

        $username = $_POST['username'];
	    $password = $_POST['password'];

        include 'koneksi.php';
        $login = mysqli_query($conn,"select * from petugas where username = '".$username."' and password = '".md5($password)."'");
        
        if(mysqli_num_rows($login) > 0) {

            $dt_login = mysqli_fetch_assoc($login);
            session_start();
            $_SESSION['id_petugas'] = $dt_login['id_petugas'];
            $_SESSION['nama_petugas'] = $dt_login['nama_petugas'];
            $_SESSION['status_login'] = true;

            if($dt_login['level'] == "Admin") {

                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Admin";
        
                header("location:/SPP/Admin/dashboard.php");
        
            } else if($dt_login['level'] == "Petugas") {
        

                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Petugas";
        
                header("location:/SPP/Petugas/dashboard.php");
        
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
            }
            
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
        }
    }

?>