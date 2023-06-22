<?php
$conn = mysqli_connect("localhost","root","","androiduas");
    $id_customer = $_GET['id_customer'];
    $nama_customer = $_GET['nama_customer'];
    $alamat_customer = $_GET['alamat_customer'];
    $notelp_customer = $_GET['notelp_customer'];
    $jk_customer = $_GET['jk_customer'];
    $umur_customer = $_GET['umur_customer'];
    $hobby_customer = $_GET['hobby_customer'];
    $query = "update data_customer set nama_customer = '$nama_customer', alamat_customer = '$alamat_customer', notelp_customer = '$notelp_customer', 
    jk_customer = '$jk_customer', umur_customer = '$umur_customer', hobby_customer = '$hobby_customer' where id_customer = '$id_customer'";

    mysqli_query($conn, $query);
    $json = array('status' => 'success','data'=>'null');
    echo json_encode($json);
?> 