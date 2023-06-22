<?php
$conn = mysqli_connect("localhost","root","","androiduas");
$perintah = "select * from data_customer";
$eksekusi = mysqli_query($conn, $perintah);
$cek = mysqli_affected_rows($conn);

if($cek > 0){
    $response["kode"] = 1;
    $response["pesan"] = "Data Tersedia";
    $response["data"] = array();

    while($ambil = mysqli_fetch_object($eksekusi)){
        $F["id_customer"] = $ambil->id_customer;
        $F["nama_customer"] = $ambil->nama_customer;
        $F["alamat_customer"] = $ambil->alamat_customer;
        $F["notelp_customer"] = $ambil->notelp_customer;
        $F["jk_customer"] = $ambil->jk_customer;
        $F["umur_customer"] = $ambil->umur_customer;
        $F["hobby_customer"] = $ambil->hobby_customer;
        // $F["images/".$F["nama_gambar"]];

        array_push($response["data"], $F);
    }
    
}else{
    $response["kode"] = 0;
    $response["pesan"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($conn);