<?php
$conn = mysqli_connect("localhost","root","","androiduas");
    $id_barang = $_GET['id_barang'];
    $query = "delete from barang where id_barang = '$id_barang'";

    mysqli_query($conn, $query);
    mysqli_close($conn);
    $json = array('status' => 'success','data'=>'null');
    echo json_encode($json);
?>