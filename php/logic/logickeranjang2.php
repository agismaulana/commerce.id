<?php 
include "../template/user.php";
$userid = $datauser['id'];
$id = $_GET['id'];

// Menampilkan Keranjang
$keranjangs = mysqli_query($conn,"SELECT produk.*, user.id as user_id, kategori.nama FROM ((keranjang INNER JOIN produk ON keranjang.produk_id = produk.id INNER JOIN user ON keranjang.user_id = user.id INNER JOIN kategori ON produk.id_kategori = kategori.id)) WHERE produk_id = '$id'");
$jumlahKeranjangs = mysqli_num_rows($keranjangs);
$keranjang = mysqli_fetch_assoc($keranjangs);
