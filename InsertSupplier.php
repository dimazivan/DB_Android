<?php
$conn = mysqli_connect("localhost","root","","androiduas");
    $id_supplier = $_GET['id_supplier'];
    $nama_supplier = $_GET['nama_supplier'];
    $umur_supplier = $_GET['umur_supplier'];
    $jk_supplier = $_GET['jk_supplier'];
    $alamat_supplier = $_GET['alamat_supplier'];
    $notelp_supplier = $_GET['notelp_supplier'];
    $alamat_perusahaan = $_GET['alamat_perusahaan'];
    // $nama_gambar = $_FILES['gambarbarang']['name'];
    // $ukuran_file = $_FILES['gambarbarang']['size'];
    // $tipe_gambar = $_FILES['gambarbarang']['type'];

    $query = "insert into data_supplier (id_supplier, nama_supplier, umur_supplier, jk_supplier, alamat_supplier, notelp_supplier, alamat_perusahaan) 
            values ('$id_supplier', '$nama_supplier','$umur_supplier','$jk_supplier', '$alamat_supplier', '$notelp_supplier','$alamat_perusahaan')";
            
    mysqli_query($conn, $query);   
    $json = array('status' => 'success','data'=>'null');
    echo json_encode($json);
