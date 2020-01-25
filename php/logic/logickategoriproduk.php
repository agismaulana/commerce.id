<?php 

$jumlahdataperhalaman = 6;
$result = mysqli_query($conn,"SELECT * FROM produk");
$jumlah = mysqli_num_rows($result);
$jumlahhalaman = ceil($jumlah / $jumlahdataperhalaman);
$halaktif = ( isset ($_GET['page']) ) ? $_GET['page'] : 1;
$dataawal = ($jumlahdataperhalaman * $halaktif) - $jumlahdataperhalaman;

if(isset($_POST['tombol'])){
    $keyword = htmlspecialchars($_POST['search']);
    $produks = mysqli_query($conn,"SELECT produk.*,kategori.nama as namakategori FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id LIMIT $dataawal,$jumlahdataperhalaman WHERE produk.nama_produk,kategori.namakategori LIKE '%".$keyword."%'");
} else {
    $produks = mysqli_query($conn,"SELECT produk.*,kategori.nama as namakategori FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id WHERE kategori.id = $_GET[id] LIMIT $dataawal,$jumlahdataperhalaman");
}
// $fetchproduk = mysqli_fetch_assoc($produks);
// echo "<pre>";
// print_r($fetchproduk);
// die;
?>