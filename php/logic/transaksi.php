<?php

$jumlahdataperhalaman = 6;
$result = mysqli_query($conn,"SELECT * FROM transaksi");
$jumlah = mysqli_num_rows($result);
$jumlahhalaman = ceil($jumlah / $jumlahdataperhalaman);
$halaktif = ( isset ($_GET['page']) ) ? $_GET['page'] : 1;
$dataawal = ($jumlahdataperhalaman * $halaktif) - $jumlahdataperhalaman;


$id = $datauser['id'];
$produks = mysqli_query($conn,"SELECT produk.*,kategori.nama as namakategori,transaksi.total as total,transaksi.id as id_transaksi,user.nama as nama_user,transaksi.jumlah_beli as jumlah,status.nama as status FROM transaksi INNER JOIN produk ON produk.id = transaksi.produk_id INNER JOIN kategori ON produk.id_kategori = kategori.id INNER JOIN user ON user.id = transaksi.user_id INNER JOIN status ON status.id = transaksi.status_id WHERE user.id = '$id'");
$fetchproduk = mysqli_fetch_assoc($produks);
