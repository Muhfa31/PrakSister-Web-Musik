<?php
error_reporting(1);
include "client-lagu.php";

if($_POST['aksi'] == 'tambah'){
    $data = array("id_lagu"=>$_POST['id_lagu'],
                  "id_artis"=>$_POST['id_artis'],
                  "id_album"=>$_POST['id_album'],
                  "nama_lagu"=>$_POST['nama_lagu'],
                  "tahun_rilis"=>$_POST['tahun_rilis'],
                  "aksi"=>$_POST['aksi']);
    $abc -> tambah_lagu($data);
    header('location:lagu.php');              
} else if ($_POST['aksi']=='ubah'){
    $data = array("id_lagu"=>$_POST['id_lagu'],
                  "id_artis"=>$_POST['id_artis'],
                  "id_album"=>$_POST['id_album'],
                  "nama_lagu"=>$_POST['nama_lagu'],
                  "tahun_rilis"=>$_POST['tahun_rilis'],
                  "aksi"=>$_POST['aksi']);
    $abc -> ubah_lagu($data);
    header('location:lagu.php');               
} else if ($_GET['aksi']=='hapus'){
    $data = array("id_lagu"=>$_GET['id_lagu'],
                  "aksi"=>$_GET['aksi']);
    $abc -> hapus_lagu($data);         
    header('location:lagu.php');
}  
unset($abc,$data);
?>