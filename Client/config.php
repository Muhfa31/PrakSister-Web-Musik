<?php
    $servername = "192.168.31.158";
    $username = "root";
    $database = "musikku";
    $password = "";

    $con = mysqli_connect($servername, $username, $password, $database);

    if(!$con){
        die("Koneksi gagal: ".mysqli_connect_error());
    }
?>