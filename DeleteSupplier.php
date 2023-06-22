<?php
$conn = mysqli_connect("localhost","root","","androiduas");
    $id_supplier = $_GET['id_supplier'];
    $query = "delete from data_supplier where id_supplier = '$id_supplier'";

    mysqli_query($conn, $query);
    mysqli_close($conn);
    $json = array('status' => 'success','data'=>'null');
    echo json_encode($json);
?>