<?php
$id = $_GET['id'];
$produks = mysqli_query($conn,"SELECT produk.*,kategori.nama as namakategori FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id WHERE produk.id = '$id'");
$produk = mysqli_fetch_assoc($produks);
// echo"<pre>";
// print_r($produk);
// die;
?>