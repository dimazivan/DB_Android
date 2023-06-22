<?php
$conn = mysqli_connect("localhost","root","","androiduas");
    $id_customer = $_GET['id_customer'];
    $query = "delete from data_customer where id_customer = '$id_customer'";

    mysqli_query($conn, $query);
    mysqli_close($conn);
    $json = array('status' => 'success','data'=>'null');
    echo json_encode($json);
?>