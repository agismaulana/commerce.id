<?php 
session_start();
include "../logic/logickoneksi.php";
include "../template/user.php";
if(isset($_SESSION['login'])){
    $id = $_GET['id'];
    $produks = mysqli_query($conn,"SELECT produk.* FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id WHERE produk.id = '$id'"); 

    $produk = mysqli_fetch_assoc($produks); 
    // echo "<pre>";
    // print_r($produk);
    // die;

    // echo"<pre>";
    // print_r($datauser);
    // die;
    $produkid = $produk['id'];
    $userid = $datauser['id'];
    $tanggal = date('Y-m-d');
    // var_dump($userid);
    $keranjang = mysqli_query($conn,"INSERT INTO keranjang VALUES ('','$produkid','$userid','$tanggal')");
    header("Location: keranjang.php");
} else {
    header("Location: ../auth/login.php");
}

?>