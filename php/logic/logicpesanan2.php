<?php 

$userid = $datauser['id'];
$id = $_GET['id'];
$pesans = mysqli_query($conn,"SELECT produk.*,user.id as user_id,user.nama as nama_user,user.address as alamat,pesan.jumlah_beli as jumlah,pesan.total as total,pesan.status as status,pesan.id as id_pesan FROM ((pesan INNER JOIN produk ON pesan.produk_id = produk.id INNER JOIN user ON pesan.user_id = user.id INNER JOIN kategori ON produk.id_kategori = kategori.id)) WHERE pesan.id ='$id'");
$pesan = mysqli_fetch_assoc($pesans);
// echo "<pre>";
// print_r($pesan);
// die;

?>