<?php
$conn = mysqli_connect("localhost","root","","androiduas");
    $id_barang = $_GET['id_barang'];
    $nama_barang = $_GET['nama_barang'];
    $jenis_barang = $_GET['jenis_barang'];
    $harga_barang = $_GET['harga_barang'];
    $harga_jual_barang = $_GET['harga_jual_barang'];
    $stock_barang = $_GET['stock_barang'];
    $lokasi_gudang = $_GET['lokasi_gudang'];
    $query = "update barang set nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', harga_barang = '$harga_barang', 
    harga_jual_barang = '$harga_jual_barang', stock_barang = '$stock_barang', lokasi_gudang = '$lokasi_gudang' where id_barang = '$id_barang'";

    mysqli_query($conn, $query);
    $json = array('status' => 'success','data'=>'null');
    echo json_encode($json);
?>