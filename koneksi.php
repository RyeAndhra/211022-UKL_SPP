<?php

    $conn=mysqli_connect('localhost', 'root', '', 'sekolah');
    
    if(mysqli_connect_error()) {

        printf("Connect failed : %sn\ ", mysqli_connect_error());
        exit();

    }

?>