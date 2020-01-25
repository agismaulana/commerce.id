<?php 
include "../template/user.php";
$userid = $datauser['id'];


$keranjangs = mysqli_query($conn,"SELECT produk.*, user.id as user_id, kategori.nama FROM ((keranjang INNER JOIN produk ON keranjang.produk_id = produk.id INNER JOIN user ON keranjang.user_id = user.id INNER JOIN kategori ON produk.id_kategori = kategori.id)) WHERE user_id = '$userid'");
$jumlahKeranjangs = mysqli_num_rows($keranjangs);
// var_dump($jumlahKeranjangs);
// die;
$keranjang = mysqli_fetch_assoc($keranjangs);




// $jumlahdataperhalaman = 6;
// $result = mysqli_query($conn,"SELECT * FROM keranjang WHERE keranjang.user_id = '$userid'");
// $keranjang = mysqli_fetch_assoc($result);
// // echo "<pre>";
// // print_r($keranjang);
// // die;
// $jumlah = mysqli_num_rows($result);
// $jumlahhalaman = ceil($jumlah / $jumlahdataperhalaman);
// $halaktif = ( isset ($_GET['page']) ) ? $_GET['page'] : 1;
// $dataawal = ($jumlahdataperhalaman * $halaktif) - $jumlahdataperhalaman;
// $produkid = $keranjang['produk_id'];
// $produks = mysqli_query($conn,"SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id WHERE id = '$produkid'");
// // $produk = mysqli_fetch_assoc($produks);
// echo "<pre>";
// print_r($keranjang);
// die;