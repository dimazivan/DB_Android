<?php
$conn = mysqli_connect("localhost","root","","androiduas");
    $id_customer = $_GET['id_customer'];
    $nama_customer = $_GET['nama_customer'];
    $alamat_customer = $_GET['alamat_customer'];
    $notelp_customer = $_GET['notelp_customer'];
    $jk_customer = $_GET['jk_customer'];
    $umur_customer = $_GET['umur_customer'];
    $hobby_customer = $_GET['hobby_customer'];
    // $nama_gambar = $_FILES['gambarbarang']['name'];
    // $ukuran_file = $_FILES['gambarbarang']['size'];
    // $tipe_gambar = $_FILES['gambarbarang']['type'];

    $query = "insert into data_customer (id_customer, nama_customer, alamat_customer, notelp_customer, jk_customer, umur_customer, hobby_customer) 
            values ('$id_customer', '$nama_customer','$alamat_customer','$notelp_customer', '$jk_customer','$umur_customer', '$hobby_customer')";
            
    mysqli_query($conn, $query);   
    $json = array('status' => 'success','data'=>'null');
    echo json_encode($json);
