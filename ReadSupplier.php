<?php
$conn = mysqli_connect("localhost","root","","androiduas");
$perintah = "select * from data_supplier";
$eksekusi = mysqli_query($conn, $perintah);
$cek = mysqli_affected_rows($conn);

if($cek > 0){
    $response["kode"] = 1;
    $response["pesan"] = "Data Tersedia";
    $response["data"] = array();

    while($ambil = mysqli_fetch_object($eksekusi)){
        $F["id_supplier"] = $ambil->id_supplier;
        $F["nama_supplier"] = $ambil->nama_supplier;
        $F["umur_supplier"] = $ambil->umur_supplier;
        $F["jk_supplier"] = $ambil->jk_supplier;
        $F["alamat_supplier"] = $ambil->alamat_supplier;
        $F["notelp_supplier"] = $ambil->notelp_supplier;
        $F["alamat_perusahaan"] = $ambil->alamat_perusahaan;
        // $F["images/".$F["nama_gambar"]];

        array_push($response["data"], $F);
    }
    
}else{
    $response["kode"] = 0;
    $response["pesan"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($conn);