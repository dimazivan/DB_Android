<?php
$conn = mysqli_connect("localhost","root","","androiduas");
$perintah = "select * from barang";
$eksekusi = mysqli_query($conn, $perintah);
$cek = mysqli_affected_rows($conn);

if($cek > 0){
    $response["kode"] = 1;
    $response["pesan"] = "Data Tersedia";
    $response["data"] = array();

    while($ambil = mysqli_fetch_object($eksekusi)){
        $F["id_barang"] = $ambil->id_barang;
        $F["nama_barang"] = $ambil->nama_barang;
        $F["jenis_barang"] = $ambil->jenis_barang;
        $F["harga_barang"] = $ambil->harga_barang;
        $F["harga_jual_barang"] = $ambil->harga_jual_barang;
        $F["stock_barang"] = $ambil->stock_barang;
        $F["lokasi_gudang"] = $ambil->lokasi_gudang;
        // $F["images/".$F["nama_gambar"]];

        array_push($response["data"], $F);
    }
    
}else{
    $response["kode"] = 0;
    $response["pesan"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($conn);