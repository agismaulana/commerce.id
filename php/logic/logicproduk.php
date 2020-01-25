<?php 

$jumlahdataperhalaman = 3;
$result = mysqli_query($conn,"SELECT * FROM produk");
$jumlah = mysqli_num_rows($result);
$jumlahhalaman = ceil($jumlah / $jumlahdataperhalaman);
$halaktif = ( isset ($_GET['page']) ) ? $_GET['page'] : 1;
$dataawal = ($jumlahdataperhalaman * $halaktif) - $jumlahdataperhalaman;

$produks = mysqli_query($conn,"SELECT produk.*,kategori.nama as namakategori FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id LIMIT $dataawal,$jumlahdataperhalaman");
$fetchproduk = mysqli_fetch_assoc($produks);
// echo "<pre>";
// print_r($fetchproduk);
// die;
?>