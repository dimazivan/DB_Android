<?php
$conn = mysqli_connect("localhost","root","","androiduas");
    $id_supplier = $_GET['id_supplier'];
    $nama_supplier = $_GET['nama_supplier'];
    $umur_supplier = $_GET['umur_supplier'];
    $jk_supplier = $_GET['jk_supplier'];
    $alamat_supplier = $_GET['alamat_supplier'];
    $notelp_supplier = $_GET['notelp_supplier'];
    $alamat_perusahaan = $_GET['alamat_perusahaan'];
    $query = "update data_supplier set nama_supplier = '$nama_supplier', umur_supplier = '$umur_supplier', jk_supplier = '$jk_supplier',
    alamat_supplier = '$alamat_supplier', notelp_supplier = '$notelp_supplier', alamat_perusahaan = '$alamat_perusahaan' where id_supplier = '$id_supplier'";

    mysqli_query($conn, $query);
    $json = array('status' => 'success','data'=>'null');
    echo json_encode($json);
?>